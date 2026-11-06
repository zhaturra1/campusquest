@php
    $roles = [
        [
            'tag' => 'Guild Crest',
            'tagBg' => 'bg-[#f3f4ff]',
            'tagText' => 'text-[#5341cd]',
            'gradient' => 'linear-gradient(45deg, rgb(108, 92, 231) 0%, rgb(162, 155, 254) 100%)',
            'shadow' => 'shadow-[0px_8px_20px_-4px_rgba(108,92,231,0.4)]',
            'svg' => '/images/badges/role-crest-shield.svg',
            'title' => 'Skuad Crest Alpha',
            'desc' => 'Perisai utama identitas kelompok belajar & kompetisi resmi.',
            'code' => 'cq-crest-shield',
            'meta' => 'SVG Master',
            'metaColor' => 'text-[#5341cd]',
        ],
        [
            'tag' => 'Captain',
            'tagBg' => 'bg-[#fef9e7]',
            'tagText' => 'text-[#b7950b]',
            'gradient' => 'linear-gradient(45deg, rgb(246, 211, 101) 0%, rgb(253, 160, 133) 100%)',
            'shadow' => 'shadow-[0px_8px_20px_-4px_rgba(246,211,101,0.4)]',
            'svg' => '/images/badges/role-captain.svg',
            'title' => 'Team Leader / Captain',
            'desc' => 'Penanggung jawab delegasi tugas & finalisasi submit berkas.',
            'code' => 'role-captain',
            'meta' => 'PIC Utama',
            'metaColor' => 'text-[#f1c40f]',
        ],
        [
            'tag' => 'Strategist',
            'tagBg' => 'bg-[#d3e4ff]',
            'tagText' => 'text-[#005ba0]',
            'gradient' => 'linear-gradient(45deg, rgb(79, 172, 254) 0%, rgb(0, 242, 254) 100%)',
            'shadow' => 'shadow-[0px_8px_20px_-4px_rgba(79,172,254,0.4)]',
            'svg' => '/images/badges/role-strategist.svg',
            'title' => 'Core Strategist',
            'desc' => 'Perencana linimasa, taktik pembagian poin XP, dan kurasi quest.',
            'code' => 'role-strategist',
            'meta' => 'Timeline Planner',
            'metaColor' => 'text-[#005ba0]',
        ],
        [
            'tag' => 'Researcher',
            'tagBg' => 'bg-[#e8f8f5]',
            'tagText' => 'text-[#00b894]',
            'gradient' => 'linear-gradient(45deg, rgb(67, 233, 123) 0%, rgb(56, 249, 215) 100%)',
            'shadow' => 'shadow-[0px_8px_20px_-4px_rgba(67,233,123,0.4)]',
            'svg' => '/images/badges/role-researcher.svg',
            'title' => 'Researcher & Analyst',
            'desc' => 'Eksplorasi data pendukung, literatur jurnal, dan analisis komparasi.',
            'code' => 'role-researcher',
            'meta' => 'Evidence Lead',
            'metaColor' => 'text-[#00b894]',
        ],
        [
            'tag' => 'Builder',
            'tagBg' => 'bg-[#f3f4ff]',
            'tagText' => 'text-[#5341cd]',
            'gradient' => 'linear-gradient(45deg, rgb(108, 92, 231) 0%, rgb(236, 178, 255) 100%)',
            'shadow' => 'shadow-[0px_8px_20px_-4px_rgba(108,92,231,0.4)]',
            'svg' => '/images/badges/role-builder.svg',
            'title' => 'Frontend Builder',
            'desc' => 'Pengembang prototipe kode, integrasi web, dan uji interaktif.',
            'code' => 'role-builder',
            'meta' => 'Tech Prototype',
            'metaColor' => 'text-[#5341cd]',
        ],
        [
            'tag' => 'Designer',
            'tagBg' => 'bg-[#fff7ed]',
            'tagText' => 'text-[#c2410c]',
            'gradient' => 'linear-gradient(45deg, rgb(255, 117, 140) 0%, rgb(255, 190, 118) 100%)',
            'shadow' => 'shadow-[0px_8px_20px_-4px_rgba(255,117,140,0.4)]',
            'svg' => '/images/badges/role-designer.svg',
            'title' => 'Creative Designer',
            'desc' => 'Perancang aset UI, visual poster presentasi, dan konsistensi warna.',
            'code' => 'role-designer',
            'meta' => 'Visual Stylist',
            'metaColor' => 'text-[#ff758c]',
        ],
        [
            'tag' => 'Presenter',
            'tagBg' => 'bg-[#fef9e7]',
            'tagText' => 'text-[#b7950b]',
            'gradient' => 'linear-gradient(45deg, rgb(246, 211, 101) 0%, rgb(253, 160, 133) 100%)',
            'shadow' => 'shadow-[0px_8px_20px_-4px_rgba(246,211,101,0.4)]',
            'svg' => '/images/badges/role-pitcher.svg',
            'title' => 'Presenter & Pitcher',
            'desc' => 'Penyaji demo hasil riset di depan dewan juri dan audiens kampus.',
            'code' => 'role-pitcher',
            'meta' => 'Pitch Master',
            'metaColor' => 'text-[#f1c40f]',
        ],
        [
            'tag' => 'Banner Crest',
            'tagBg' => 'bg-[#f3f4ff]',
            'tagText' => 'text-[#5341cd]',
            'gradient' => 'linear-gradient(45deg, rgb(108, 92, 231) 0%, rgb(135, 61, 166) 100%)',
            'shadow' => 'shadow-[0px_8px_20px_-4px_rgba(108,92,231,0.4)]',
            'svg' => '/images/badges/role-crest-banner.svg',
            'title' => 'Bendera Skuad Juara',
            'desc' => 'Panji tim penanda pencapaian quest antar-fakultas.',
            'code' => 'cq-crest-banner',
            'meta' => 'Guild Banner',
            'metaColor' => 'text-[#5341cd]',
        ],
    ];
@endphp

<section class="bg-white drop-shadow-[0px_1px_1px_rgba(0,0,0,0.05)] border border-[#e5e0fa]/60 flex flex-col gap-5 items-start p-6 sm:p-8 rounded-[24px] w-full" aria-label="Skuad Crest dan Peran Kolaborasi">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 w-full">
        <div>
            <div class="flex items-center gap-2">
                <img src="{{ asset('/images/badges/icon-shield-header.svg') }}" alt="" aria-hidden="true" width="15" height="18" class="w-[15px] h-[18px] shrink-0" />
                <h3 class="font-semibold text-[#1e272e] text-[20px] leading-[28px]">
                    Skuad Crest &amp; Peran Kolaborasi (Role Badges)
                </h3>
            </div>
            <p class="font-normal text-[#636e72] text-[12px] leading-[18px] mt-1">
                Identitas tim multi-disiplin dan lencana peranan spesifik mahasiswa dalam menyelesaikan quest kampus.
            </p>
        </div>

        <span class="bg-[#f3f4ff] text-[#5341cd] px-3 py-1 rounded-full font-bold text-[10px] leading-[14px] tracking-[0.4px] shrink-0 self-start sm:self-center">
            6 Roles + 2 Crests
        </span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full">
        @foreach($roles as $role)
            <div class="bg-[#fafafa] rounded-[20px] p-4 flex flex-col justify-between gap-3 border border-[#e5e0fa]/40 transition-all hover:-translate-y-0.5 hover:bg-white hover:shadow-[0px_10px_24px_-6px_rgba(108,92,231,0.12)]">
                <div>
                    <div class="flex items-center justify-between w-full">
                        <span class="{{ $role['tagBg'] }} {{ $role['tagText'] }} px-2 py-0.5 rounded-full font-semibold text-[10px] leading-[14px] tracking-[0.4px]">
                            {{ $role['tag'] }}
                        </span>
                        <span class="font-bold text-[#636e72] text-[10px] leading-[14px] tracking-[0.4px]">
                            48×48
                        </span>
                    </div>

                    <div class="py-3 flex items-center justify-center">
                        <div class="w-[80px] h-[80px] p-[4px] rounded-full flex items-center justify-center shrink-0 {{ $role['shadow'] }}"
                             style="background-image: {{ $role['gradient'] }};">
                            <div class="bg-white w-full h-full rounded-full flex items-center justify-center">
                                <img src="{{ asset($role['svg']) }}"
                                     alt="{{ $role['title'] }}"
                                     width="40"
                                     height="40"
                                     class="w-[40px] h-[40px] object-contain" />
                            </div>
                        </div>
                    </div>

                    <div class="text-center space-y-1">
                        <h4 class="font-semibold text-[#1e272e] text-[15px] leading-[22px]">
                            {{ $role['title'] }}
                        </h4>
                        <p class="font-normal text-[#636e72] text-[12px] leading-[18px]">
                            {{ $role['desc'] }}
                        </p>
                    </div>
                </div>

                <div class="pt-2.5 border-t border-[rgba(229,224,250,0.5)] flex items-center justify-between gap-2 w-full">
                    <code class="font-mono font-bold text-[#636e72] text-[10px] leading-[14px] tracking-[0.3px]">
                        {{ $role['code'] }}
                    </code>
                    <span class="font-semibold {{ $role['metaColor'] }} text-[10px] leading-[14px] tracking-[0.3px]">
                        {{ $role['meta'] }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</section>
