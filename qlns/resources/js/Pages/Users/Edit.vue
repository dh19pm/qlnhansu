<template>
  <div>
    <div class="mb-8 flex justify-start max-w-3xl">
      <h1 class="font-bold text-3xl">
        <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('users')">Người Dùng</inertia-link>
        <span class="text-indigo-400 font-medium">/</span>
        {{ form.fullname }}
      </h1>
      <img v-if="user.photo" class="block w-8 h-8 rounded-full ml-4" :src="user.photo" />
    </div>
    <trashed-message v-if="user.deleted_at" class="mb-6" @restore="restore">
      Người dùng này đã bị xoá.
    </trashed-message>
    <div class="bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="update">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <text-input v-model="form.fullname" :error="form.errors.fullname" class="pr-6 pb-8 w-full lg:w-1/2" label="Họ và tên" />
          <text-input v-model="form.email" :error="form.errors.email" class="pr-6 pb-8 w-full lg:w-1/2" label="Email" />
          <text-input v-model="form.password" :error="form.errors.password" class="pr-6 pb-8 w-full lg:w-1/2" type="password" autocomplete="new-password" label="Mật khẩu" />
          <select-input v-model="form.owner" :error="form.errors.owner" class="pr-6 pb-8 w-full lg:w-1/2" label="Quyền hạn">
            <option :value="true">Quản trị viên</option>
            <option :value="false">Người dùng</option>
          </select-input>
          <file-input v-model="form.photo" :error="form.errors.photo" class="pr-6 pb-8 w-full lg:w-1/1" type="file" accept="image/*" label="Ảnh đại diện" />
        </div>
        <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex items-center">
          <button v-if="!user.deleted_at" class="text-red-600 hover:underline" tabindex="-1" type="button" @click="destroy">Xoá Người Dùng</button>
          <loading-button :loading="form.processing" class="btn-indigo ml-auto" type="submit">Cập Nhật</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'
import TextInput from '@/Shared/TextInput'
import FileInput from '@/Shared/FileInput'
import SelectInput from '@/Shared/SelectInput'
import LoadingButton from '@/Shared/LoadingButton'
import TrashedMessage from '@/Shared/TrashedMessage'

export default {
  metaInfo() {
    return {
      title: `${this.form.fullname}`,
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
    user: Object,
  },
  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        _method: 'put',
        fullname: this.user.fullname,
        email: this.user.email,
        password: null,
        owner: this.user.owner,
        photo: null,
      })
    }
  },
  methods: {
    update() {
        // this.route('users.update', this.user.id) not working when upload images fix by siben
        this.form.post('/users/' + this.user.id, {
            onSuccess: () => this.form.reset('password', 'photo')
        })
    },
    destroy() {
        if (confirm('Are you sure you want to delete this user?')) {
            this.$inertia.delete(this.route('users.destroy', this.user.id))
        }
    },
    restore() {
        if (confirm('Are you sure you want to restore this user?')) {
            this.$inertia.put(this.route('users.restore', this.user.id))
        }
    },
  },
}
</script>
