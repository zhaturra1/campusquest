@props([
    'currentXp' => 1950,
    'currentLevel' => 8,
])

@php
    $ranks = [
        [
            'roman' => 'I',
            'isCrown' => false,
            'circleBg' => 'bg-[#f3f4ff]',
            'circleText' => 'text-[#5341cd]',
            'dotColor' => 'bg-[rgba(83,65,205,0.6)]',
            'name' => 'Novice Explorer',
            'levelRange' => 'Lv. 1 – 5',
            'levelColor' => 'text-[#5341cd]',
            'xpRange' => '0 – 2,500 XP',
            'minLevel' => 1,
            'maxLevel' => 5,
            'perks' => [
                'Akses Quest Dasar Kampus',
                'Kartu Portofolio Digital',
            ],
        ],
        [
            'roman' => 'II',
            'isCrown' => false,
            'circleBg' => 'bg-[#d3e4ff]',
            'circleText' => 'text-[#005ba0]',
            'dotColor' => 'bg-[#005ba0]',
            'name' => 'Campus Pathfinder',
            'levelRange' => 'Lv. 6 – 12',
            'levelColor' => 'text-[#005ba0]',
            'xpRange' => '2,501 – 7,500 XP',
            'minLevel' => 6,
            'maxLevel' => 12,
            'perks' => [
                'Membentuk Squad/Tim Mandiri',
                'Badge Pin Silver Terverifikasi',
            ],
        ],
        [
            'roman' => 'III',
            'isCrown' => false,
            'circleBg' => 'bg-[#6c5ce7]',
            'circleText' => 'text-[#faf6ff]',
            'dotColor' => 'bg-[#5341cd]',
            'name' => 'Elite Scholar',
            'levelRange' => 'Lv. 13 – 20',
            'levelColor' => 'text-[#5341cd]',
            'xpRange' => '7,501 – 18,000 XP',
            'minLevel' => 13,
            'maxLevel' => 20,
            'perks' => [
                'Akses Bimbingan Prioritas Dosen',
                'Diskon Registrasi Kompetisi Kampus',
            ],
        ],
        [
            'roman' => 'IV',
            'isCrown' => false,
            'circleBg' => 'bg-[#fef9e7]',
            'circleText' => 'text-[#b7950b]',
            'dotColor' => 'bg-[#f1c40f]',
            'name' => 'Master Achiever',
            'levelRange' => 'Lv. 21 – 30',
            'levelColor' => 'text-[#b7950b]',
            'xpRange' => '18,001 – 35,000 XP',
            'minLevel' => 21,
            'maxLevel' => 30,
            'perks' => [
                'Badge Emas Terukir PDF Resmi',
                'Undangan Jamuan Prestasi Rektor',
            ],
        ],
        [
            'roman' => '👑',
            'isCrown' => true,
            'circleBg' => '',
            'circleStyle' => 'background-image: linear-gradient(45deg, rgb(236, 178, 255) 0%, rgb(211, 228, 255) 100%);',
            'circleText' => 'text-[#1e272e]',
            'dotColor' => 'bg-[#873da6]',
            'name' => 'Campus Legend',
            'levelRange' => 'Lv. 31+',
            'levelColor' => 'text-[#873da6]',
            'xpRange' => '> 35,000 XP',
            'minLevel' => 31,
            'maxLevel' => 999,
            'perks' => [
                'Hall of Fame Kampus Abadi',
                'Verifikasi Fast-track Beasiswa & Magang',
            ],
        ],
    ];
@endphp

<section class="bg-white drop-shadow-[0px_1px_1px_rgba(0,0,0,0.05)] border border-[#e5e0fa]/60 flex flex-col gap-6 items-start p-6 sm:p-8 rounded-[24px] w-full" aria-label="Leveling & Progression Rank Journey">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 w-full">
        <div class="flex flex-col items-start">
            <span class="bg-[#f3f4ff] text-[#5341cd] px-3 py-1 rounded-full font-semibold text-[10px] leading-[14px] tracking-[0.5px] uppercase">
                JENJANG KARIR AKADEMIK (RANK ARCHITECTURE)
            </span>
            <h2 class="font-semibold text-[#1e272e] text-[22px] sm:text-[26px] leading-[32px] tracking-[-0.4px] mt-1.5">
                Leveling &amp; Progression Rank Journey
            </h2>
            <p class="font-normal text-[#636e72] text-[13px] sm:text-[14px] leading-[21px] mt-1">
                Hierarki tier bertingkat berbasis akumulasi XP kumulatif beserta hak istimewa (perks) mahasiswa.
            </p>
        </div>

        <div class="bg-[rgba(243,244,255,0.8)] px-4 py-2.5 rounded-full flex items-center gap-2.5 shrink-0 self-start md:self-center">
            <img src="{{ asset('/images/badges/rank-curve-icon.svg') }}" alt="" aria-hidden="true" width="17" height="14" class="w-[16.5px] h-[13.8px] shrink-0" />
            <div class="text-[#5341cd] font-semibold text-[12px] leading-[16px]">
                Kurva Eksponensial Terkalibrasi
            </div>
        </div>
    </div>

    <div class="relative w-full pt-2">
        <div class="hidden lg:block absolute left-[40px] right-[40px] top-[56px] h-[8px] rounded-full bg-gradient-to-r from-[#f3f4ff] via-[#6c5ce7] to-[#de8ffd]" aria-hidden="true"></div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 relative z-10">
            @foreach($ranks as $index => $rank)
                @php
                    $isCurrentRank = ($currentLevel >= $rank['minLevel'] && $currentLevel <= $rank['maxLevel']);
                    $isFeaturedRank = ($index === 2);
                @endphp
                <div class="{{ ($isCurrentRank || $isFeaturedRank) ? 'bg-white shadow-[0px_0px_0px_2px_rgba(83,65,205,0.22),0px_10px_24px_-6px_rgba(108,92,231,0.14)]' : 'bg-[#fafafa]' }} rounded-[20px] p-4 flex flex-col justify-between transition-all hover:-translate-y-0.5">
                    <div>
                        <div class="flex items-center justify-between pb-3">
                            <div class="w-[48px] h-[48px] rounded-full {{ $rank['circleBg'] }} shadow-[0px_0px_0px_4px_white,0px_1px_2px_0px_rgba(0,0,0,0.05)] flex items-center justify-center shrink-0"
                                 @if(!empty($rank['circleStyle'])) style="{{ $rank['circleStyle'] }}" @endif>
                                <span class="font-bold text-[14px] leading-[20px] {{ $rank['circleText'] }}">
                                    {{ $rank['roman'] }}
                                </span>
                            </div>

                            @if($isCurrentRank)
                                <span class="px-2.5 py-0.5 rounded-full bg-[#f3f4ff] text-[#5341cd] font-bold text-[10px] uppercase tracking-wider">
                                    Rank Aktif
                                </span>
                            @elseif($isFeaturedRank)
                                <span class="px-2.5 py-0.5 rounded-full bg-[#6c5ce7]/10 text-[#5341cd] font-semibold text-[10px]">
                                    Target Tier
                                </span>
                            @endif
                        </div>

                        <div class="flex items-center gap-2 mt-1">
                            <span class="w-2 h-2 rounded-full {{ $rank['dotColor'] }} shrink-0"></span>
                            <h3 class="font-semibold text-[#1e272e] text-[15px] leading-[21px]">
                                {{ $rank['name'] }}
                            </h3>
                        </div>

                        <div class="mt-1.5 font-bold text-[12px] leading-[16px] {{ $rank['levelColor'] }}">
                            {{ $rank['levelRange'] }}
                        </div>

                        <div class="mt-0.5 font-normal text-[#636e72] text-[12px] leading-[18px]">
                            {{ $rank['xpRange'] }}
                        </div>
                    </div>

                    <div class="pt-3 mt-3 border-t border-[rgba(229,224,250,0.5)] flex flex-col gap-2">
                        @foreach($rank['perks'] as $perk)
                            <div class="flex items-start gap-2">
                                <img src="{{ asset('/images/badges/rank-check-icon.svg') }}" alt="" aria-hidden="true" width="10" height="7" class="w-[9.5px] h-[7px] mt-1.5 shrink-0" />
                                <span class="font-normal text-[#636e72] text-[12px] leading-[17px]">
                                    {{ $perk }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
