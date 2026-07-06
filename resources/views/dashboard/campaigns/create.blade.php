<x-layouts.app title="Buat Kampanye - Givespace" bodyClass="bg-[#f8fafc] text-[#1c1b18] min-h-screen">
    <div class="mx-auto max-w-4xl px-6 py-10 lg:px-8">
        <div class="flex flex-col gap-6 rounded-[2rem] bg-white p-8 shadow-xl shadow-slate-300/20 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <p class="text-sm uppercase tracking-[0.24em] text-slate-600">Buat Kampanye</p>
                <h1 class="mt-3 text-3xl font-semibold text-slate-900">Tambahkan kampanye baru</h1>
                <p class="mt-2 text-sm text-slate-600">Isi detail kampanye dan mulai mengumpulkan donasi.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center rounded-full border border-slate-200 bg-slate-50 px-5 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-100">Dashboard</a>
                <a href="{{ route('campaigns.index') }}" class="inline-flex items-center rounded-full border border-slate-200 bg-slate-50 px-5 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-100">Kembali ke Daftar</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="mt-6 rounded-3xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                <ul class="list-disc space-y-1 pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('campaigns.store') }}" method="POST" class="mt-8 space-y-6 rounded-[2rem] bg-white p-8 shadow-xl shadow-slate-300/20">
            @csrf

            <div>
                <label for="title" class="mb-2 block text-sm font-semibold text-slate-900">Judul Kampanye</label>
                <input id="title" name="title" type="text" value="{{ old('title') }}" required class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200" />
            </div>

            <div>
                <label for="description" class="mb-2 block text-sm font-semibold text-slate-900">Deskripsi</label>
                <textarea id="description" name="description" rows="5" class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200">{{ old('description') }}</textarea>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label for="target_amount" class="mb-2 block text-sm font-semibold text-slate-900">Target Dana (Rp)</label>
                    <input id="target_amount" name="target_amount" type="number" min="0" value="{{ old('target_amount', 0) }}" required class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200" />
                </div>
                <div class="flex items-center gap-3 rounded-3xl border border-slate-200 bg-slate-50 px-5 py-4">
                    <input id="is_active" name="is_active" type="checkbox" class="h-4 w-4 rounded border-slate-300 text-slate-900 focus:ring-slate-900" {{ old('is_active', true) ? 'checked' : '' }} />
                    <label for="is_active" class="text-sm font-semibold text-slate-900">Aktif</label>
                </div>
            </div>

            <button type="submit" class="w-full rounded-3xl bg-slate-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">Simpan Kampanye</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const campaignForm = document.querySelector('form[action="{{ route('campaigns.store') }}"]');
            if (!campaignForm) return;

            campaignForm.addEventListener('keydown', function (event) {
                const activeElement = document.activeElement;
                if (event.key === 'Enter' && activeElement && ['INPUT', 'TEXTAREA'].includes(activeElement.tagName)) {
                    event.preventDefault();
                    campaignForm.submit();
                }
            });
        });
    </script>
</x-layouts.app>
