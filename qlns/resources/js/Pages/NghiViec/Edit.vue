<template>
  <div>
    <div class="mb-8 flex justify-start max-w-3xl">
      <h1 class="font-bold text-3xl">
        <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('nghiviec')">Nghỉ Việc</inertia-link>
        <span class="text-indigo-400 font-medium">/</span>
        {{ nghiviec.hovaten }}
      </h1>
    </div>
    <trashed-message v-if="nghiviec.deleted_at" class="mb-6" @restore="restore">
      Nghỉ việc này đã bị xoá.
    </trashed-message>
    <div class="bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="update">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <text-input v-model="form.maso" :error="form.errors.maso" class="pr-6 pb-8 w-full lg:w-1/2" label="Mã số" />
          <select-input v-model="form.loaibaohiem" :error="form.errors.loaibaohiem" class="pr-6 pb-8 w-full lg:w-1/2" label="Loại bảo hiểm">
            <option :value="null">- Chọn -</option>
            <option v-for="lbh in loaibaohiem" :key="lbh.id" :value="lbh.id">{{ lbh.tenbh }}</option>
          </select-input>
          <text-input v-model="form.noicap" :error="form.errors.noicap" class="pr-6 pb-8 w-full lg:w-1/2" label="Nơi cấp" />
          <text-input v-model="form.ngaycap" :error="form.errors.ngaycap" class="pr-6 pb-8 w-full lg:w-1/2" type="date" label="Ngày cấp" />
          <text-input v-model="form.ngayhethan" :error="form.errors.ngayhethan" class="pr-6 pb-8 w-full lg:w-1/2" type="date" label="Ngày hết hạn" />
          <text-input v-model="form.mucdong" :error="form.errors.mucdong" class="pr-6 pb-8 w-full lg:w-1/2" label="Mức đóng" />
        </div>
        <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex items-center">
          <button v-if="!nghiviec.deleted_at && $page.props.auth.user.role == 2" class="text-red-600 hover:underline" tabindex="-1" type="button" @click="destroy">Xoá Nghỉ Việc</button>
          <loading-button :loading="form.processing" class="btn-indigo ml-auto" type="submit">Cập Nhật</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'
import TextInput from '@/Shared/TextInput'
import SelectInput from '@/Shared/SelectInput'
import LoadingButton from '@/Shared/LoadingButton'
import TrashedMessage from '@/Shared/TrashedMessage'

export default {
  metaInfo() {
    return {
      title: `${this.nghiviec.hovaten}`,
    }
  },
  components: {
    LoadingButton,
    SelectInput,
    TextInput,
    TrashedMessage,
  },
  layout: Layout,
  props: {
    loaibaohiem: Array,
    nghiviec: Object,
  },
  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        _method: 'put',
        maso: this.nghiviec.maso,
        loaibaohiem: this.nghiviec.loaibaohiem,
        noicap: this.nghiviec.noicap,
        ngaycap: this.nghiviec.ngaycap,
        ngayhethan: this.nghiviec.ngayhethan,
        mucdong: this.nghiviec.mucdong.toString(),
      })
    }
  },
  methods: {
    update() {
        this.form.post(this.route('nghiviec.update', this.nghiviec.id))
    },
    destroy() {
        if (confirm('Bạn có chắc chắn muốn xoá không?')) {
            this.$inertia.delete(this.route('nghiviec.destroy', this.nghiviec.id))
        }
    },
    restore() {
        if (confirm('Bạn có chắc chắn muốn khôi phục không?')) {
            this.$inertia.put(this.route('nghiviec.restore', this.nghiviec.id))
        }
    },
  },
}
</script>
