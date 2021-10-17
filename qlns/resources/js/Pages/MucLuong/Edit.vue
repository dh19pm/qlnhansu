<template>
  <div>
    <div class="mb-8 flex justify-start max-w-3xl">
      <h1 class="font-bold text-3xl">
        <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('mucluong')">Mức Lương</inertia-link>
        <span class="text-indigo-400 font-medium">/</span>
        Chỉnh Sửa
      </h1>
    </div>
    <trashed-message v-if="mucluong.deleted_at" class="mb-6" @restore="restore">
      Mức lương này đã bị xoá.
    </trashed-message>
    <div class="bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="update">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <select-input v-model="form.phongban" :error="form.errors.phongban" class="pr-6 pb-8 w-full lg:w-1/2" label="Phòng ban">
            <option :value="null">- Chọn -</option>
            <option v-for="pb in phongban" :key="pb.id" :value="pb.id">{{ pb.tenpb }}</option>
          </select-input>
          <select-input v-model="form.chucvu" :error="form.errors.chucvu" class="pr-6 pb-8 w-full lg:w-1/2" label="Chức vụ">
            <option :value="null">- Chọn -</option>
            <option v-for="cv in chucvu" :key="cv.id" :value="cv.id">{{ cv.tencv }}</option>
          </select-input>
          <text-input v-model="form.luongcb" :error="form.errors.luongcb" class="pr-6 pb-8 w-full lg:w-1/2" type="number" label="Lương cơ bản" />
          <text-input v-model="form.phucap" :error="form.errors.phucap" class="pr-6 pb-8 w-full lg:w-1/2" label="Phụ cấp" />
        </div>
        <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex items-center">
          <button v-if="!mucluong.deleted_at && $page.props.auth.user.role == 2" class="text-red-600 hover:underline" tabindex="-1" type="button" @click="destroy">Xoá Mức Lương</button>
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
      title: `Chỉnh Sửa Mức Lương`,
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
    phongban: Array,
    chucvu: Array,
    mucluong: Object,
  },
  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        _method: 'put',
        phongban: this.mucluong.phongban,
        chucvu: this.mucluong.chucvu,
        luongcb: this.mucluong.luongcb,
        phucap: this.mucluong.phucap.toString(),
      })
    }
  },
  methods: {
    update() {
        this.form.post(this.route('mucluong.update', this.mucluong.id))
    },
    destroy() {
        if (confirm('Bạn có chắc chắn muốn xoá không?')) {
            this.$inertia.delete(this.route('mucluong.destroy', this.mucluong.id))
        }
    },
    restore() {
        if (confirm('Bạn có chắc chắn muốn khôi phục không?')) {
            this.$inertia.put(this.route('mucluong.restore', this.mucluong.id))
        }
    },
  },
}
</script>
