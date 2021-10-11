<template>
  <div>
    <div class="mb-8 flex justify-start max-w-3xl">
      <h1 class="font-bold text-3xl">
        <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('nhanvien')">Nhân Viên</inertia-link>
        <span class="text-indigo-400 font-medium">/</span>
        {{ form.hovaten }}
      </h1>
    </div>
    <trashed-message v-if="nhanvien.deleted_at" class="mb-6" @restore="restore">
      Nhân viên này đã bị xoá.
    </trashed-message>
    <div class="bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="update">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <text-input v-model="form.hovaten" :error="form.errors.hovaten" class="pr-6 pb-8 w-full lg:w-1/2" label="Họ và tên" />
          <select-input v-model="form.gioitinh" :error="form.errors.gioitinh" class="pr-6 pb-8 w-full lg:w-1/2" label="Giới tính">
            <option :value="null">- Chọn --</option>
            <option :value="0">Nam</option>
            <option :value="1">Nữ</option>
          </select-input>
          <select-input v-model="form.trangthai" :error="form.errors.trangthai" class="pr-6 pb-8 w-full lg:w-1/2" label="Trạng thái làm việc">
            <option :value="null">- Chọn -</option>
            <option :value="0">Đã nghĩ việc</option>
            <option :value="1">Đang làm việc</option>
          </select-input>
          <text-input v-model="form.ngaysinh" :error="form.errors.ngaysinh" class="pr-6 pb-8 w-full lg:w-1/2" type="date" label="Ngày sinh" />
          <text-input v-model="form.hesoluong" :error="form.errors.hesoluong" class="pr-6 pb-8 w-full lg:w-1/2" label="Hệ số lương" />
          <select-input v-model="form.mucluong" :error="form.errors.mucluong" class="pr-6 pb-8 w-full lg:w-1/2" label="Phòng ban -> chức vụ">
            <option :value="null">- Chọn -</option>
            <option v-for="ml in mucluong" :key="ml.id" :value="ml.id">{{ ml.tenpb }} -> {{ ml.tencv }}</option>
          </select-input>
          <select-input v-model="form.bangcap" :error="form.errors.bangcap" class="pr-6 pb-8 w-full lg:w-1/2" label="Bằng cấp">
            <option :value="null">- Chọn -</option>
            <option v-for="bc in bangcap" :key="bc.id" :value="bc.id">{{ bc.tenbc }}</option>
          </select-input>
          <select-input v-model="form.ngoaingu" :error="form.errors.ngoaingu" class="pr-6 pb-8 w-full lg:w-1/2" label="Ngoại ngữ">
            <option :value="null">- Chọn -</option>
            <option v-for="ng in ngoaingu" :key="ng.id" :value="ng.id">{{ ng.tenng }}</option>
          </select-input>
          <select-input v-model="form.chuyenmon" :error="form.errors.chuyenmon" class="pr-6 pb-8 w-full lg:w-1/2" label="Chuyên môn">
            <option :value="null">- Chọn -</option>
            <option v-for="cm in chuyenmon" :key="cm.id" :value="cm.id">{{ cm.tencm }}</option>
          </select-input>
          <select-input v-model="form.tongiao" :error="form.errors.tongiao" class="pr-6 pb-8 w-full lg:w-1/2" label="Tôn giáo">
            <option :value="null">- Chọn -</option>
            <option v-for="tg in tongiao" :key="tg.id" :value="tg.id">{{ tg.tentg }}</option>
          </select-input>
          <select-input v-model="form.dantoc" :error="form.errors.dantoc" class="pr-6 pb-8 w-full lg:w-1/2" label="Dân tộc">
            <option :value="null">- Chọn -</option>
            <option v-for="td in dantoc" :key="td.id" :value="td.id">{{ td.tendt }}</option>
          </select-input>
          <text-input v-model="form.sdt" :error="form.errors.sdt" class="pr-6 pb-8 w-full lg:w-1/2" label="Số điện thoại" />
          <text-input v-model="form.cmnd" :error="form.errors.cmnd" class="pr-6 pb-8 w-full lg:w-1/2" type="number" label="CMND" />
          <text-input v-model="form.diachi" :error="form.errors.diachi" class="pr-6 pb-8 w-full lg:w-1/2" label="Địa chỉ" />
          <text-input v-model="form.quequan" :error="form.errors.quequan" class="pr-6 pb-8 w-full lg:w-1/2" label="Quê quán" />
          <file-input v-model="form.photo" :error="form.errors.photo" class="pr-6 pb-8 w-full lg:w-1/2" type="file" accept="image/*" label="Ảnh đại diện" />
        </div>
        <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex items-center">
          <button v-if="!nhanvien.deleted_at && $page.props.auth.user.role == 2" class="text-red-600 hover:underline" tabindex="-1" type="button" @click="destroy">Xoá Nhân Viên</button>
          <loading-button :loading="form.processing" class="btn-indigo ml-auto" type="submit">Cập Nhật</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'
import FileInput from '@/Shared/FileInput'
import TextInput from '@/Shared/TextInput'
import SelectInput from '@/Shared/SelectInput'
import LoadingButton from '@/Shared/LoadingButton'
import TrashedMessage from '@/Shared/TrashedMessage'

export default {
  metaInfo() {
    return {
      title: `${this.nhanvien.hovaten}`,
    }
  },
  components: {
    FileInput,
    LoadingButton,
    SelectInput,
    TextInput,
    TrashedMessage,
  },
  layout: Layout,
  props: {
    mucluong: Array,
    bangcap: Array,
    chuyenmon: Array,
    ngoaingu: Array,
    tongiao: Array,
    dantoc: Array,
    nhanvien: Object
  },
  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        _method: 'put',
        mucluong: this.nhanvien.mucluong,
        bangcap: this.nhanvien.bangcap,
        ngoaingu: this.nhanvien.ngoaingu,
        chuyenmon: this.nhanvien.chuyenmon,
        hovaten: this.nhanvien.hovaten,
        gioitinh: this.nhanvien.gioitinh,
        tongiao: this.nhanvien.tongiao,
        dantoc: this.nhanvien.dantoc,
        trangthai: this.nhanvien.trangthai,
        ngaysinh: this.nhanvien.ngaysinh,
        sdt: this.nhanvien.sdt,
        cmnd: this.nhanvien.cmnd,
        diachi: this.nhanvien.diachi,
        quequan: this.nhanvien.quequan,
        hesoluong: this.nhanvien.hesoluong,
        photo: null
      })
    }
  },
  methods: {
    update() {
        this.form.post(this.route('nhanvien.update', this.nhanvien.id), {
            onSuccess: () => this.form.reset('password', 'photo')
        })
    },
    destroy() {
        if (confirm('Are you sure you want to delete this user?')) {
            this.$inertia.delete(this.route('nhanvien.destroy', this.nhanvien.id))
        }
    },
    restore() {
        if (confirm('Are you sure you want to restore this user?')) {
            this.$inertia.put(this.route('nhanvien.restore', this.nhanvien.id))
        }
    },
  },
}
</script>
