@props([
    'name' => 'Social Warrior',
    'description' => null,
    'xp' => null,
    'earned' => true,
    'compact' => false,
    'showHaptic' => true,
])

@php
    $catalog = [
        'Social Warrior' => [
            'tier' => 'TIER GOLD',
            'tierBg' => 'bg-[#fef9e7]',
            'tierText' => 'text-[#b7950b]',
            'xpLabel' => '+1,200 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(246, 211, 101) 0%, rgb(253, 160, 133) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(246,211,101,0.4)]',
            'svg' => '/images/badges/badge-social-warrior.svg',
            'miniBg' => 'bg-[#fda085]',
            'miniSvg' => '/images/badges/mini-social-warrior.svg',
            'miniSize' => 'w-[14px] h-[14px]',
            'category' => 'Sosial & Pengabdian',
            'defaultDesc' => 'Selesaikan 5 Quest Pengabdian Masyarakat & Aksi Sosial',
            'audioIcon' => '/images/badges/icon-music-note.svg',
            'audioName' => 'Fanfare Harmoni',
            'haptic' => 'Haptic: Crisp ✨',
        ],
        'Academic Maestro' => [
            'tier' => 'TIER PLATINUM',
            'tierBg' => 'bg-[#f3f4ff]',
            'tierText' => 'text-[#5341cd]',
            'xpLabel' => '+2,500 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(108, 92, 231) 0%, rgb(162, 155, 254) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(108,92,231,0.4)]',
            'svg' => '/images/badges/badge-academic-maestro.svg',
            'miniBg' => 'bg-[#5341cd]',
            'miniSvg' => '/images/badges/mini-academic-maestro.svg',
            'miniSize' => 'w-[14px] h-[13px]',
            'category' => 'Akademik Murni',
            'defaultDesc' => 'Raih IPK > 3.75 & publikasikan jurnal ilmiah terakreditasi',
            'audioIcon' => '/images/badges/icon-sparkle-audio.svg',
            'audioName' => 'Grand Orchestral',
            'haptic' => 'Haptic: Heavy Pulse',
        ],
        'Campus Pioneer' => [
            'tier' => 'TIER SILVER',
            'tierBg' => 'bg-[#f1f3f4]',
            'tierText' => 'text-[#636e72]',
            'xpLabel' => '+600 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(161, 196, 253) 0%, rgb(194, 233, 251) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(161,196,253,0.4)]',
            'svg' => '/images/badges/badge-campus-pioneer.svg',
            'miniBg' => 'bg-[#005ba0]',
            'miniSvg' => '/images/badges/mini-campus-pioneer.svg',
            'miniSize' => 'w-[13px] h-[13px]',
            'category' => 'Onboarding & Misi',
            'defaultDesc' => 'Ikuti orientasi kampus & selesaikan 3 misi onboarding',
            'audioIcon' => '/images/badges/icon-music-note.svg',
            'audioName' => 'Chime Bells',
            'haptic' => 'Haptic: Gentle Tick',
        ],
        'Hackathon Champion' => [
            'tier' => 'TIER PLATINUM',
            'tierBg' => 'bg-[#f3f4ff]',
            'tierText' => 'text-[#5341cd]',
            'xpLabel' => '+3,000 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(108, 92, 231) 0%, rgb(236, 178, 255) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(108,92,231,0.4)]',
            'svg' => '/images/badges/badge-hackathon-champion.svg',
            'miniBg' => 'bg-[#873da6]',
            'miniSvg' => '/images/badges/mini-hackathon-champion.svg',
            'miniSize' => 'w-[13px] h-[11px]',
            'category' => 'Kompetisi Teknologi',
            'defaultDesc' => 'Juara 1-3 kompetisi teknologi / karya ilmiah nasional berbobot',
            'audioIcon' => '/images/badges/icon-sparkle-audio.svg',
            'audioName' => 'Epic Fanfare ⚡',
            'haptic' => 'Haptic: Double Buzz',
        ],
        'Squad Leader' => [
            'tier' => 'TIER GOLD',
            'tierBg' => 'bg-[#fef9e7]',
            'tierText' => 'text-[#b7950b]',
            'xpLabel' => '+1,500 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(246, 211, 101) 0%, rgb(253, 160, 133) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(246,211,101,0.4)]',
            'svg' => '/images/badges/badge-squad-leader.svg',
            'miniBg' => 'bg-[#f1c40f]',
            'miniSvg' => '/images/badges/mini-squad-leader.svg',
            'miniSize' => 'w-[16px] h-[8px]',
            'category' => 'Kolaborasi Tim',
            'defaultDesc' => 'Bentuk tim 5 orang dan tuntaskan 3 Quest kolaboratif',
            'audioIcon' => '/images/badges/icon-music-note.svg',
            'audioName' => 'Horn Anthem',
            'haptic' => 'Haptic: Crisp Tap',
        ],
        'Green Campus Hero' => [
            'tier' => 'TIER SILVER',
            'tierBg' => 'bg-[#e8f8f5]',
            'tierText' => 'text-[#00b894]',
            'xpLabel' => '+800 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(67, 233, 123) 0%, rgb(56, 249, 215) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(67,233,123,0.4)]',
            'svg' => '/images/badges/badge-green-campus-hero.svg',
            'miniBg' => 'bg-[#00b894]',
            'miniSvg' => '/images/badges/mini-green-campus-hero.svg',
            'miniSize' => 'w-[11px] h-[11px]',
            'category' => 'Keberlanjutan SDG',
            'defaultDesc' => 'Ikrar penanaman pohon & reduksi limbah plastik kampus',
            'audioIcon' => '/images/badges/icon-music-note.svg',
            'audioName' => 'Nature Synth',
            'haptic' => 'Haptic: Soft Ripple',
        ],
        'Debate Orator' => [
            'tier' => 'TIER GOLD',
            'tierBg' => 'bg-[#fef9e7]',
            'tierText' => 'text-[#b7950b]',
            'xpLabel' => '+1,400 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(246, 211, 101) 0%, rgb(253, 160, 133) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(246,211,101,0.4)]',
            'svg' => '/images/badges/badge-debate-orator.svg',
            'miniBg' => 'bg-[#f1c40f]',
            'miniSvg' => '/images/badges/mini-debate-orator.svg',
            'miniSize' => 'w-[15px] h-[13px]',
            'category' => 'Komunikasi & Nalar',
            'defaultDesc' => 'Finalis kompetisi debat Parliamentary & seminar nasional',
            'audioIcon' => '/images/badges/icon-music-note.svg',
            'audioName' => 'Trophy Flare',
            'haptic' => 'Haptic: Vibrant Kick',
        ],
        'Fast Learner' => [
            'tier' => 'TIER BRONZE',
            'tierBg' => 'bg-[#fff7ed]',
            'tierText' => 'text-[#c2410c]',
            'xpLabel' => '+500 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(255, 190, 118) 0%, rgb(240, 147, 43) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(240,147,43,0.4)]',
            'svg' => '/images/badges/badge-fast-learner.svg',
            'miniBg' => 'bg-[#f0932b]',
            'miniSvg' => '/images/badges/mini-fast-learner.svg',
            'miniSize' => 'w-[13px] h-[11px]',
            'category' => 'Skill & Sertifikasi',
            'defaultDesc' => 'Submit 3 sertifikat kursus daring terakreditasi dalam 1 semester',
            'audioIcon' => '/images/badges/icon-music-note.svg',
            'audioName' => 'Quick Zing',
            'haptic' => 'Haptic: Micro Click',
        ],
        'Organisational Dynamo' => [
            'tier' => 'TIER SILVER',
            'tierBg' => 'bg-[#f1f3f4]',
            'tierText' => 'text-[#636e72]',
            'xpLabel' => '+900 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(79, 172, 254) 0%, rgb(0, 242, 254) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(79,172,254,0.4)]',
            'svg' => '/images/badges/badge-organisational-dynamo.svg',
            'miniBg' => 'bg-[#0984e3]',
            'miniSvg' => '/images/badges/mini-organisational-dynamo.svg',
            'miniSize' => 'w-[16px] h-[15px]',
            'category' => 'Organisasi Mahasiswa',
            'defaultDesc' => 'Panitia inti kegiatan kemahasiswaan resmi kampus',
            'audioIcon' => '/images/badges/icon-music-note.svg',
            'audioName' => 'Gavel Strike',
            'haptic' => 'Haptic: Crisp Tap',
        ],
        'Peer Mentor' => [
            'tier' => 'TIER GOLD',
            'tierBg' => 'bg-[#fef9e7]',
            'tierText' => 'text-[#b7950b]',
            'xpLabel' => '+1,200 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(246, 211, 101) 0%, rgb(253, 160, 133) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(246,211,101,0.4)]',
            'svg' => '/images/badges/badge-peer-mentor.svg',
            'miniBg' => 'bg-[#f1c40f]',
            'miniSvg' => '/images/badges/mini-peer-mentor.svg',
            'miniSize' => 'w-[15px] h-[13px]',
            'category' => 'Mentoring Mahasiswa',
            'defaultDesc' => 'Membimbing 3 mahasiswa junior dengan rating kepuasan tinggi',
            'audioIcon' => '/images/badges/icon-music-note.svg',
            'audioName' => 'Harmonic Harp',
            'haptic' => 'Haptic: Soft Buzz',
        ],
        'Research Innovator' => [
            'tier' => 'TIER PLATINUM',
            'tierBg' => 'bg-[#f3f4ff]',
            'tierText' => 'text-[#5341cd]',
            'xpLabel' => '+2,800 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(108, 92, 231) 0%, rgb(135, 61, 166) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(108,92,231,0.4)]',
            'svg' => '/images/badges/badge-research-innovator.svg',
            'miniBg' => 'bg-[#873da6]',
            'miniSvg' => '/images/badges/mini-research-innovator.svg',
            'miniSize' => 'w-[12px] h-[12px]',
            'category' => 'Riset & Inovasi',
            'defaultDesc' => 'Lolos pendanaan proposal PKM Belmawa Dikti atau riset kampus',
            'audioIcon' => '/images/badges/icon-sparkle-audio.svg',
            'audioName' => 'Cosmic Synth ✨',
            'haptic' => 'Haptic: Sustained',
        ],
        'Sports Legend' => [
            'tier' => 'TIER SILVER',
            'tierBg' => 'bg-[#f1f3f4]',
            'tierText' => 'text-[#636e72]',
            'xpLabel' => '+1,000 XP',
            'ringGradient' => 'linear-gradient(45deg, rgb(255, 117, 140) 0%, rgb(255, 126, 179) 100%)',
            'ringShadow' => 'shadow-[0px_8px_20px_-4px_rgba(255,117,140,0.4)]',
            'svg' => '/images/badges/badge-sports-legend.svg',
            'miniBg' => 'bg-[#ff758c]',
            'miniSvg' => '/images/badges/mini-sports-legend.svg',
            'miniSize' => 'w-[13px] h-[13px]',
            'category' => 'Olahraga & Atletik',
            'defaultDesc' => 'Peraih medali pada Pekan Olahraga Mahasiswa antar fakultas',
            'audioIcon' => '/images/badges/icon-music-note.svg',
            'audioName' => 'Stadium Roar',
            'haptic' => 'Haptic: Pulse Tap',
        ],
    ];

    $aliasMap = [
        'Pemula Kampus' => 'Campus Pioneer',
        'Aktif Seminar' => 'Debate Orator',
        'Social Warrior' => 'Social Warrior',
        'Juara Lomba' => 'Hackathon Champion',
    ];

    $resolvedKey = $aliasMap[$name] ?? (isset($catalog[$name]) ? $name : 'Social Warrior');
    $meta = $catalog[$resolvedKey];
    $finalDesc = $description ?: $meta['defaultDesc'];
    $finalXpLabel = $xp ? ('+' . number_format((int) $xp) . ' XP') : $meta['xpLabel'];
@endphp

<article class="bg-white rounded-[22px] {{ $compact ? 'p-3.5' : 'p-5' }} drop-shadow-[0px_1px_1px_rgba(0,0,0,0.05)] border border-[#e5e0fa]/60 flex flex-col justify-between min-w-0 overflow-hidden transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0px_12px_28px_-6px_rgba(108,92,231,0.14)] {{ $earned ? '' : 'opacity-65 grayscale-[35%]' }}">
    <div class="w-full min-w-0">
        <div class="flex flex-wrap items-center justify-between gap-1.5 pb-2.5">
            <span class="{{ $meta['tierBg'] }} {{ $meta['tierText'] }} {{ $compact ? 'px-2 py-0.5 text-[9px]' : 'px-2.5 py-1 text-[10px]' }} rounded-full font-bold leading-[14px] tracking-[0.4px] uppercase whitespace-nowrap">
                {{ $meta['tier'] }}
            </span>
            <span class="bg-[#f3f4ff] text-[#5341cd] {{ $compact ? 'px-2 py-0.5 text-[9px]' : 'px-2.5 py-1 text-[10px]' }} rounded-full font-bold leading-[14px] tracking-[0.3px] whitespace-nowrap">
                {{ $finalXpLabel }}
            </span>
        </div>

        <div class="py-2.5 flex items-center justify-center">
            <div class="relative flex items-center justify-center rounded-full shrink-0 {{ $compact ? 'w-[76px] h-[76px] p-[5px]' : 'w-[96px] h-[96px] p-[6px]' }} {{ $meta['ringShadow'] }}"
                 style="background-image: {{ $meta['ringGradient'] }};">
                <div class="bg-white w-full h-full rounded-full flex items-center justify-center">
                    <img src="{{ asset($meta['svg']) }}"
                         alt="{{ $name }}"
                         width="{{ $compact ? 38 : 48 }}"
                         height="{{ $compact ? 38 : 48 }}"
                         class="{{ $compact ? 'w-[38px] h-[38px]' : 'w-[48px] h-[48px]' }} object-contain select-none" />
                </div>
                <div class="absolute bottom-[-4px] right-[-4px] {{ $compact ? 'w-[24px] h-[24px]' : 'w-[28px] h-[28px]' }} rounded-full {{ $meta['miniBg'] }} drop-shadow-[0px_1px_1px_rgba(0,0,0,0.08)] ring-2 ring-white flex items-center justify-center">
                    <img src="{{ asset($meta['miniSvg']) }}"
                         alt=""
                         aria-hidden="true"
                         class="{{ $meta['miniSize'] }} object-contain" />
                </div>
            </div>
        </div>

        <div class="pt-2 flex flex-col items-center gap-1.5 text-center">
            <span class="bg-[#eceeef] text-[#636e72] px-2.5 py-0.5 rounded-full font-bold text-[10px] leading-[14px] tracking-[0.4px]">
                {{ $meta['category'] }}
            </span>
            <h4 class="font-semibold text-[#1e272e] {{ $compact ? 'text-[14px] leading-[20px]' : 'text-[16px] leading-[24px]' }}">
                {{ $name }}
            </h4>
            <p class="font-normal text-[#636e72] text-[12px] leading-[18px] line-clamp-2">
                {{ $finalDesc }}
            </p>
        </div>
    </div>

    @if($showHaptic)
        <div class="pt-4 w-full">
            <div class="bg-[#f2f4f5] rounded-[14px] px-3 py-2 flex items-center justify-between gap-2 w-full">
                <div class="flex items-center gap-1.5 min-w-0">
                    <img src="{{ asset($meta['audioIcon']) }}" alt="" aria-hidden="true" class="w-3 h-3 shrink-0 object-contain" />
                    <span class="text-[#636e72] text-[11px] leading-[15px] truncate">{{ $meta['audioName'] }}</span>
                </div>
                <span class="text-[#5341cd] font-bold text-[10px] leading-[14px] tracking-[0.3px] shrink-0">
                    {{ $meta['haptic'] }}
                </span>
            </div>
        </div>
    @endif
</article>
