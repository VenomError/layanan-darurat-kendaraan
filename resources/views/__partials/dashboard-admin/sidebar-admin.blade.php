{{-- Dashboard --}}
<x-nav-title title="Dashboard" />
<x-nav-item
    href="{{ route('admin.dashboard') }}"
    title="Dashboard"
    icon="layout-dashboard"
/>

{{-- Laporan --}}
<x-nav-title title="Laporan" />
<x-nav-item
    href="/laporan/darurat"
    title="Laporan Darurat"
    icon="alert-triangle"
/>

{{-- Bengkel --}}
<x-nav-title title="Bengkel" />
<x-nav-item
    href="/bengkels"
    title="List Bengkel"
    icon="list"
/>
<x-nav-item
    href="/bengkels/map"
    title="Map Lokasi"
    icon="map-pin"
/>
<x-nav-item
    href="/bengkels/add"
    title="Tambah Bengkel"
    icon="wrench"
/>
<x-nav-item
    href="/services"
    title="Service"
    icon="hammer"
/>

{{-- Akun --}}
<x-nav-title title="Akun" />
<x-nav-item
    href="{{ route('admin.akun') }}"
    title="Admin"
    icon="shield"
/>
<x-nav-item
    href="/akun/admin-bengkel"
    title="Admin Bengkel"
    icon="user-cog"
/>
<x-nav-item
    href="/akun/pengguna"
    title="Pengguna"
    icon="users"
/>

{{-- Settings --}}
<x-nav-title title="Settings" />
<x-nav-item
    href="/settings"
    title="Setting"
    icon="settings"
/>
