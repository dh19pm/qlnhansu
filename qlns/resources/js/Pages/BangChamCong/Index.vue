<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">Bảng Chấm Công</h1>
    <form @submit.prevent="update">
    <div class="mb-6 flex justify-between items-center">
      <search-filter v-model="form.search" class="w-full max-w-md mr-4" @reset="reset">
        <label class="block text-gray-700">Trạng thái xoá:</label>
        <select v-model="form.trashed" class="mt-1 w-full form-select">
          <option :value="null">- Chưa chọn -</option>
          <option value="only">Đã xoá</option>
          <option value="with">Tất cả</option>
        </select>
      </search-filter>
      <loading-button :loading="chamcong.processing" class="btn-indigo" type="submit">Chấm Công</loading-button>
    </div>
    <div class="bg-white rounded shadow overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <tr class="text-left font-bold">
          <th class="px-6 pt-6 pb-4">Mã nhân viên</th>
          <th class="px-6 pt-6 pb-4">Họ và tên</th>
          <th class="px-6 pt-6 pb-4">Email</th>
          <th class="px-6 pt-6 pb-4 text-center"><input type="checkbox" @click="selectAll" v-model="allSelected"></th>
          <th class="px-6 pt-6 pb-4"></th>
        </tr>
        <tr v-for="nv in nhanvien.data" :key="nv.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
          <td class="border-t">
            <inertia-link class="px-6 py-4 flex items-center" :href="route('nhanvien.edit', nv.id)" tabindex="-1">
              {{ nv.manv }}
            </inertia-link>
          </td>
          <td class="border-t">
            <inertia-link class="px-6 py-4 flex items-center focus:text-indigo-500" :href="route('nhanvien.edit', nv.id)">
              {{ nv.hovaten }}
            </inertia-link>
          </td>
          <td class="border-t">
            <inertia-link class="px-6 py-4 flex items-center" :href="route('nhanvien.edit', nv.id)" tabindex="-1">
              {{ nv.email }}
            </inertia-link>
          </td>
          <td class="border-t text-center">
              <input v-model="chamcong.nhanvienIDList[nv.id - 1]" type="checkbox" />
          </td>
          <td class="border-t w-px">
            <inertia-link class="px-4 flex items-center" :href="route('nhanvien.edit', nv.id)" tabindex="-1">
              <icon name="cheveron-right" class="block w-6 h-6 fill-gray-400" />
            </inertia-link>
          </td>
        </tr>
        <tr v-if="nhanvien.data.length === 0">
          <td class="border-t px-6 py-4" colspan="5">Không có nhân viên nào cả.</td>
        </tr>
      </table>
    </div>
    </form>
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
import LoadingButton from '@/Shared/LoadingButton'
import TrashedMessage from '@/Shared/TrashedMessage'
export default {
  metaInfo: { title: 'Nhân Viên' },
  layout: Layout,
  components: {
    Icon,
    Pagination,
    SearchFilter,
    LoadingButton,
    TrashedMessage,
  },
  props: {
    nhanvien: Object,
    filters: Object,
  },
  data() {
    return {
      allSelected: false,
      form: {
        search: this.filters.search,
        trashed: this.filters.trashed,
      },
      chamcong: this.$inertia.form({
          nhanvienIDList: []
      }),
    }
  },
  watch: {
    form: {
      handler: throttle(function() {
        let query = pickBy(this.form)
        this.$inertia.replace(this.route('bangchamcong', Object.keys(query).length ? query : { remember: 'forget' }))
      }, 150),
      deep: true,
    },
  },
  methods: {
    reset() {
      this.form = mapValues(this.form, () => null)
    },
    update() {
        this.chamcong.post(this.route('bangchamcong'))
    },
    selectAll: function() {
        this.nhanvien.data.forEach((nv) => this.chamcong.nhanvienIDList[nv.id - 1] = !this.allSelected);
    },
  },
}
</script>
