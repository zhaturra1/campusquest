# CampusQuest Design Direction (`DESIGN.md`)

**Project:** CampusQuest: Gamifikasi Pengembangan Diri Mahasiswa (Kelompok 5 - S1 Teknologi Informasi, Telkom University)  
**Visual Origin:** Google Stitch ("Clean & Soft Academic Gamification UI")  

---

## 1. Purpose-Gate Decisions (`R-01`, `R-04`, `R-09`, `R-10`, `R-11`)

Per `antislop-ui`, every visual pattern inherited from the Google Stitch design system is governed by an explicit hierarchy and functional purpose:

- **Color & Primary Gradient (`R-01`)**:
  - **Primary (`#5341CD`) & Lavender Surface (`#F3F4FF` to `#F9F5FF`)**: Distinguishes interactive academic gamification elements (XP counters, active navigation states, and primary submission CTAs) from neutral document surfaces (`#FFFFFF`, `#FAFAFA`).
  - **Primary-to-Secondary Gradient (`from-primary-container to-secondary`)**: Reserved strictly for **primary conversion actions** (e.g., *Kirim Pengajuan Misi*, *Export PDF*, *Masuk dengan SSO*) and **active XP progress bars** to visually separate live progression from static cards.
  - **Semantic Status Tokens (WCAG AA Verified)**:
    - `badge-emerald` (`#047857`, 5.48:1 with white): Approved / Verified status (`Disetujui`).
    - `badge-gold` (`#92400E`, 6.72:1 on `#FEF9E7`): High-value achievements and rank #1 podium indicators.
    - `badge-sky` (`#0369A1`, 5.36:1 on `#EBF5FB`): Academic & organizational category tags.
    - `error` (`#BA1A1A` / `#93000A` on `#FFDAD6`): Revision required or rejected status (`Ditolak`).

- **Iconography (`R-04`)**:
  - **XP & Gamification Indicators**: Semantic academic and achievement icons (`military_tech`, `workspace_premium`, `school`, `verified`, `task_alt`, `emoji_events`) are used for badges, levels, and academic verification; `bolt` is restricted to inline numeric `+XP` reward pills where it serves as the unit symbol for Experience Points.

- **Context Badges Above Page Headings (`R-09`)**:
  - Top-of-page context pills above `<h1>` are used strictly to communicate **module ownership (PIC & Epic number)** or **active institutional context** (e.g., faculty/NIM or database sync status) rather than repeating the `<h1>` text.

- **Backdrop Blur Cap (`R-10`)**:
  - `backdrop-blur` is capped at **at most 1 elevated navigation layer per view** (the sticky/floating top header bar over scrolling content). Modal backdrops use solid translucent scrims (`bg-black/40` or `bg-slate-900/50`) without stacking multiple blur layers.

- **Shape & Border Radius Hierarchy (`R-11`)**:
  - **Containers & Cards**: `rounded-[20px]` to `rounded-[24px]` (`1.25rem`–`1.5rem`) for soft academic card grouping.
  - **Form Inputs, Selects & Textareas**: `rounded-xl` (`0.75rem`) or `rounded-2xl` (`1rem`) to clearly distinguish editable fields from buttons.
  - **Buttons, Navigation Links & Status Tags**: `rounded-full` (`9999px`) to preserve the signature Google Stitch pill-button affordance.

---

## 2. Typography & Layout (`R-31`)

- **Font Family**: `Inter` (`400` body, `500` medium, `600` semibold labels/subheadings, `700`–`800` display headings) for high legibility across dense academic tables, NIM identifiers, and XP counters.
- **Layout Grid**:
  - **Desktop (`lg` and above)**: Left floating sidebar (`280px` student portal / `288px` admin verifier) + `12-column` responsive content grid (`8 cols` primary workspace + `4 cols` summary/inspector).
  - **Mobile (`< 1024px`)**: Single-column vertical flow with off-canvas drawer navigation (`min-w-[44px] min-h-[44px]` touch targets) and zero horizontal overflow.

---

## 3. Liveliness Dials (`R-37`)

```text
ENERGY: 6/10 (Clean, inviting academic gamification without arcade clutter)
RHYTHM: 6/10 (Balanced contrast between airy summary cards, structured tables, and focused side panels)
MOTION: 4/10 (Subtle hover elevation and smooth progress bar transitions; respects prefers-reduced-motion)
```
