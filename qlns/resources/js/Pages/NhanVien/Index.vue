<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">Nhân Viên</h1>
    <div class="mb-6 flex justify-between items-center">
      <search-filter v-model="form.search" class="w-full max-w-md mr-4" @reset="reset">
        <label class="block text-gray-700">Trạng thái xoá:</label>
        <select v-model="form.trashed" class="mt-1 w-full form-select">
          <option :value="null">-- Chưa chọn --</option>
          <option value="only">Đã xoá</option>
          <option value="with">Tất cả</option>
        </select>
        <label class="mt-4 block text-gray-700">Giới tính:</label>
        <select v-model="form.gioitinh" class="mt-1 w-full form-select">
          <option :value="null">-- Chưa chọn --</option>
          <option value="nam">Nam</option>
          <option value="nu">Nữ</option>
        </select>
        <label class="mt-4 block text-gray-700">Trạng thái làm việc:</label>
        <select v-model="form.trangthai" class="mt-1 w-full form-select">
          <option :value="null">-- Chưa chọn --</option>
          <option value="danghilam">Đã nghĩ làm</option>
          <option value="danglamviec">Đang làm việc</option>
        </select>
      </search-filter>
      <inertia-link class="btn-indigo" :href="route('nhanvien.create')">
        <span>Tạo Mới</span>
      </inertia-link>
    </div>
    <div class="bg-white rounded shadow overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <tr class="text-left font-bold">
          <th class="px-6 pt-6 pb-4">Họ và tên</th>
          <th class="px-6 pt-6 pb-4">Email</th>
          <th class="px-6 pt-6 pb-4">Số điện thoại</th>
          <th class="px-6 pt-6 pb-4">Giới tính</th>
          <th class="px-6 pt-6 pb-4" colspan="2">Trạng thái</th>
        </tr>
        <tr v-for="nv in nhanvien.data" :key="nv.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
          <td class="border-t">
            <inertia-link class="px-6 py-4 flex items-center focus:text-indigo-500" :href="route('nhanvien.edit', nv.id)">
              <img v-if="nv.photo" class="block w-5 h-5 rounded-full mr-2 -my-2" :src="nv.photo" />
              {{ nv.hovaten }}
              <icon v-if="nv.deleted_at" name="trash" class="flex-shrink-0 w-3 h-3 fill-gray-400 ml-2" />
            </inertia-link>
          </td>
          <td class="border-t">
            <inertia-link class="px-6 py-4 flex items-center" :href="route('nhanvien.edit', nv.id)" tabindex="-1">
              {{ nv.email }}
            </inertia-link>
          </td>
          <td class="border-t">
            <inertia-link class="px-6 py-4 flex items-center" :href="route('nhanvien.edit', nv.id)" tabindex="-1">
              {{ nv.sdt }}
            </inertia-link>
          </td>
          <td class="border-t">
            <inertia-link class="px-6 py-4 flex items-center" :href="route('nhanvien.edit', nv.id)" tabindex="-1">
              {{ nv.gioitinh ? 'Nữ' : 'Nam'}}
            </inertia-link>
          </td>
          <td class="border-t">
            <inertia-link class="px-6 py-4 flex items-center" :href="route('nhanvien.edit', nv.id)" tabindex="-1">
              {{ nv.trangthai ? 'Đang làm việc' : 'Đã nghĩ làm' }}
            </inertia-link>
          </td>
          <td class="border-t w-px">
            <inertia-link class="px-4 flex items-center" :href="route('nhanvien.edit', nv.id)" tabindex="-1">
              <icon name="cheveron-right" class="block w-6 h-6 fill-gray-400" />
            </inertia-link>
          </td>
        </tr>
        <tr v-if="nhanvien.data.length === 0">
          <td class="border-t px-6 py-4" colspan="4">Không có nhân viên nào cả.</td>
        </tr>
      </table>
    </div>
    <pagination :links="nhanvien.links" />
  </div>
</template>

<script>
import Icon from '@/Shared/Icon'
import Layout from '@/Shared/Layout'
import mapValues from 'lodash/mapValues'
import Pagination from '@/Shared/Pagination'
import pickBy from 'lodash/pickBy'
import SearchFilter from '@/Shared/SearchFilter'
import throttle from 'lodash/throttle'
export default {
  metaInfo: { title: 'Nhân Viên' },
  layout: Layout,
  components: {
    Icon,
    Pagination,
    SearchFilter,
  },
  props: {
    nhanvien: Object,
    filters: Object,
  },
  data() {
    return {
      form: {
        search: this.filters.search,
        trashed: this.filters.trashed,
        gioitinh: this.filters.gioitinh,
        trangthai: this.filters.trangthai,
      },
    }
  },
  watch: {
    form: {
      handler: throttle(function() {
        let query = pickBy(this.form)
        this.$inertia.replace(this.route('nhanvien', Object.keys(query).length ? query : { remember: 'forget' }))
      }, 150),
      deep: true,
    },
  },
  methods: {
    reset() {
      this.form = mapValues(this.form, () => null)
    },
  },
}
</script>
