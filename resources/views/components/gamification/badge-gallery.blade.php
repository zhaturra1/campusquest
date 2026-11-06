@props([
    'limit' => 12,
])

@php
    $allFigmaBadges = [
        'Social Warrior',
        'Academic Maestro',
        'Campus Pioneer',
        'Hackathon Champion',
        'Squad Leader',
        'Green Campus Hero',
        'Debate Orator',
        'Fast Learner',
        'Organisational Dynamo',
        'Peer Mentor',
        'Research Innovator',
        'Sports Legend',
    ];
    $items = array_slice($allFigmaBadges, 0, (int) $limit);
@endphp

<section class="flex flex-col gap-5 items-start w-full" aria-label="Galeri Spesifikasi Badge">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 w-full">
        <div>
            <h2 class="font-semibold text-[#1e272e] text-[22px] sm:text-[26px] leading-[32px] tracking-[-0.4px]">
                Galeri Spesifikasi Badge
            </h2>
            <p class="font-normal text-[#636e72] text-[13px] sm:text-[14px] leading-[21px] mt-0.5">
                Koleksi 12 badge utama semester genap lengkap dengan syarat audit, tier, dan respon haptik.
            </p>
        </div>

        <div class="flex items-center gap-2 bg-white px-3.5 py-2 rounded-full border border-[#e5e0fa]/60 shadow-2xs shrink-0 self-start sm:self-center">
            <span class="w-2 h-2 rounded-full bg-[#00b894]"></span>
            <span class="font-semibold text-[#636e72] text-[12px] leading-[16px]">
                Seluruh ikon berskala SVG 48×48
            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 w-full">
        @foreach($items as $badgeName)
            <x-gamification.badge-card
                :name="$badgeName"
                :earned="true"
                :compact="false"
                :showHaptic="true"
            />
        @endforeach
    </div>
</section>
