<template>
  <div>
    <div class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('dashboard')">
        <icon name="dashboard" class="w-4 h-4 mr-2" :class="isUrl('') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Trang Chủ</div>
      </inertia-link>
    </div>
    <div v-if="$page.props.auth.user.role == 2" class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('mucluong')">
        <icon name="users" class="w-4 h-4 mr-2" :class="isUrl('mucluong') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('mucluong') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Mức Lương</div>
      </inertia-link>
    </div>
    <div v-if="$page.props.auth.user.role == 2" class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('ungluong')">
        <icon name="users" class="w-4 h-4 mr-2" :class="isUrl('ungluong') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('ungluong') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Ứng Lương</div>
      </inertia-link>
    </div>
    <div v-if="$page.props.auth.user.role == 2" class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('baohiem')">
        <icon name="users" class="w-4 h-4 mr-2" :class="isUrl('baohiem') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('baohiem') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Bảo Hiểm</div>
      </inertia-link>
    </div>
    <div v-if="$page.props.auth.user.role == 2" class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('hopdong')">
        <icon name="users" class="w-4 h-4 mr-2" :class="isUrl('hopdong') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('hopdong') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Hợp Đồng</div>
      </inertia-link>
    </div>
    <div class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('chamcong', { nhanvien: $page.props.auth.user.nhanvien_id })">
        <icon name="users" class="w-4 h-4 mr-2" :class="isUrl('chamcong') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('chamcong') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Chấm Công</div>
      </inertia-link>
    </div>
    <div v-if="$page.props.auth.user.role == 2" class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('nghiviec')">
        <icon name="users" class="w-4 h-4 mr-2" :class="isUrl('nghiviec') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('nghiviec') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Nghỉ Việc</div>
      </inertia-link>
    </div>
    <div v-if="$page.props.auth.user.role == 2" class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('nhanvien')">
        <icon name="users" class="w-4 h-4 mr-2" :class="isUrl('nhanvien') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('nhanvien') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Nhân Viên</div>
      </inertia-link>
    </div>
  </div>
</template>

<script>
import Icon from '@/Shared/Icon'

export default {
  components: {
    Icon,
  },
  methods: {
    isUrl(...urls) {
      let currentUrl = this.$page.url.substr(1)
      if (urls[0] === '') {
        return currentUrl === ''
      }
      return urls.filter(url => currentUrl.startsWith(url)).length
    },
  },
}
</script>
