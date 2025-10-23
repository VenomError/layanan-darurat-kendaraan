<x-layouts.app>
<div class="col-lg-12">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h6 class="mb-0">Daftar Akun Admin</h6>
            <a href="{{ route('akun.admin.create') }}" class="btn btn-light btn-sm text-primary">
                <i class="bi bi-plus-circle"></i> Tambah Admin
            </a>
        </div>

        <div class="card-body">
            <div id="searchTable">
                <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                    <div class="gridjs-head">
                        <div class="gridjs-search">
                            <input type="search" placeholder="Cari admin..." aria-label="Cari admin..." class="gridjs-input gridjs-search-input" onkeyup="filterTable(this.value)">
                        </div>
                    </div>

                    <div class="gridjs-wrapper" style="height: auto;">
                        <table role="grid" class="gridjs-table text-nowrap table table-hover align-middle">
                            <thead class="gridjs-thead bg-light">
                                <tr class="gridjs-tr">
                                    <th class="gridjs-th">#</th>
                                    <th class="gridjs-th">Foto</th>
                                    <th class="gridjs-th">Nama</th>
                                    <th class="gridjs-th">Email</th>
                                    <th class="gridjs-th">Role</th>
                                    <th class="gridjs-th text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="gridjs-tbody" id="adminTableBody">
                                @forelse ($users as $user)
                                    <tr class="gridjs-tr">
                                        <td class="gridjs-td">{{ $loop->iteration}}</td>
                                        <td class="gridjs-td">{{ $user->avatar }}</td>
                                        <td class="gridjs-td">{{ $user->nama }}</td>
                                        <td class="gridjs-td">{{ $user->email }}</td>
                                        <td class="gridjs-td">{{ $user->role }}</td>
                                        <td class="gridjs-td text-center">
                                            <a href="{{ route('akun.admin.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('akun.admin.destroy', $user->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Yakin ingin menghapus akun ini?')" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">Belum ada data admin.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Script pencarian sederhana --}}
<script>
    function filterTable(keyword) {
        keyword = keyword.toLowerCase();
        const rows = document.querySelectorAll("#adminTableBody tr");
        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(keyword) ? "" : "none";
        });
    }
</script>
</x-layouts.app>