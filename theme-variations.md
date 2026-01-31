# Modern Template Theme Variations

### Theme 01 – Luxury Obsidian
    - **Best-fit niche / product:** Luxury Watches
    - **UI/UX description:** Polished dark-on-gold palette with soft glow accents and premium spacing.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f59e0b;
        --secondary: #f97316;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f59e0b, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f59e0b;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 02 – Soft Beauty
    - **Best-fit niche / product:** Beauty & Skincare
    - **UI/UX description:** Airy pastel gradients with rounded cards and gentle highlights for trust.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f97316;
        --secondary: #f472b6;
        --surface: #fff7ed;
        --surface-soft: #ffffff;
        --text: #1f2937;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f97316, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f97316;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 03 – Tech Neon
    - **Best-fit niche / product:** Electronics / Gadgets
    - **UI/UX description:** High-contrast neon accents with glassy panels and crisp typography.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #a78bfa;
        --surface: #0b1120;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #a78bfa);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 04 – Arabic Prestige
    - **Best-fit niche / product:** Arabic Elegant
    - **UI/UX description:** Deep emerald and gold tones with ornamental separators and bold headings.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #16a34a;
        --secondary: #facc15;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #16a34a, #facc15);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #16a34a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 05 – Minimal White
    - **Best-fit niche / product:** Minimal / Clean
    - **UI/UX description:** Ultra-minimal whites with hairline borders and calm contrast.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #14b8a6;
        --surface: #ffffff;
        --surface-soft: #f8fafc;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #14b8a6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 06 – Dark Premium
    - **Best-fit niche / product:** Dark Premium
    - **UI/UX description:** Charcoal surfaces with sharp highlights and luxe button treatments.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #eab308;
        --secondary: #f97316;
        --surface: #0b0f1a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #eab308, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #eab308;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 07 – Glass Bloom
    - **Best-fit niche / product:** Glassmorphism
    - **UI/UX description:** Frosted panels with soft blur and luminous gradients.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #f472b6;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 08 – Gradient Mesh
    - **Best-fit niche / product:** Creative / Art
    - **UI/UX description:** Mesh gradients and soft shadows for a vibrant modern feel.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #6366f1;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #6366f1, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #6366f1;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 09 – Brutalist Modern
    - **Best-fit niche / product:** Brutalist / Urban
    - **UI/UX description:** High-contrast blocks, strong outlines, and oversized headers.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #f97316;
        --surface: #f8fafc;
        --surface-soft: #ffffff;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 10 – SaaS Launch
    - **Best-fit niche / product:** Startup / SaaS
    - **UI/UX description:** Clean blue tech palette with subtle grid texture and clear CTAs.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #3b82f6;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #3b82f6, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #3b82f6;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 11 – Fitness Pulse
    - **Best-fit niche / product:** Fitness & Supplements
    - **UI/UX description:** Energetic red-orange palette with angular accents and bold stats.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f59e0b;
        --secondary: #f97316;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f59e0b, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f59e0b;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 12 – Nature Herbal
    - **Best-fit niche / product:** Herbal / Organic
    - **UI/UX description:** Earthy greens with textured background and eco-friendly vibe.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f97316;
        --secondary: #f472b6;
        --surface: #fff7ed;
        --surface-soft: #ffffff;
        --text: #1f2937;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f97316, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f97316;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 13 – Restaurant Noir
    - **Best-fit niche / product:** Restaurant / Food
    - **UI/UX description:** Moody food photography framing with warm copper highlights.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #a78bfa;
        --surface: #0b1120;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #a78bfa);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 14 – Real Estate Luxe
    - **Best-fit niche / product:** Real Estate
    - **UI/UX description:** Stone neutrals with structured cards and confident typography.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #16a34a;
        --secondary: #facc15;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #16a34a, #facc15);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #16a34a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 15 – Automotive Steel
    - **Best-fit niche / product:** Automotive
    - **UI/UX description:** Steel gray with electric blue accents and sleek separators.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #14b8a6;
        --surface: #ffffff;
        --surface-soft: #f8fafc;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #14b8a6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 16 – Medical Clean
    - **Best-fit niche / product:** Medical / Clean
    - **UI/UX description:** Crisp whites and aqua accents with clinical clarity.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #eab308;
        --secondary: #f97316;
        --surface: #0b0f1a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #eab308, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #eab308;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 17 – Kids Playroom
    - **Best-fit niche / product:** Kids / Toys
    - **UI/UX description:** Bright playful colors with bubbly corners and friendly badges.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #f472b6;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 18 – Travel Horizon
    - **Best-fit niche / product:** Travel / Tourism
    - **UI/UX description:** Sky gradients with airy spacing and adventure cues.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #6366f1;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #6366f1, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #6366f1;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 19 – Coffee Roastery
    - **Best-fit niche / product:** Coffee / Beverage
    - **UI/UX description:** Rich espresso tones with cream highlights and textured panels.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #f97316;
        --surface: #f8fafc;
        --surface-soft: #ffffff;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 20 – Wedding Rose
    - **Best-fit niche / product:** Events / Wedding
    - **UI/UX description:** Romantic blush palette with delicate shadows and elegant details.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #3b82f6;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #3b82f6, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #3b82f6;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 21 – Home Comfort
    - **Best-fit niche / product:** Home & Living
    - **UI/UX description:** Warm neutrals with cozy cards and soft rounded edges.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f59e0b;
        --secondary: #f97316;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f59e0b, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f59e0b;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 22 – Outdoor Explorer
    - **Best-fit niche / product:** Outdoor / Camping
    - **UI/UX description:** Forest greens with rugged borders and strong CTA focus.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f97316;
        --secondary: #f472b6;
        --surface: #fff7ed;
        --surface-soft: #ffffff;
        --text: #1f2937;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f97316, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f97316;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 23 – Pet Care
    - **Best-fit niche / product:** Pet Products
    - **UI/UX description:** Friendly colors with playful accents and welcoming visuals.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #a78bfa;
        --surface: #0b1120;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #a78bfa);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 24 – Edu Bright
    - **Best-fit niche / product:** Education / Courses
    - **UI/UX description:** Confident indigo palette with structured sections and clarity.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #16a34a;
        --secondary: #facc15;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #16a34a, #facc15);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #16a34a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 25 – Finance Trust
    - **Best-fit niche / product:** Finance / Insurance
    - **UI/UX description:** Deep navy with gold accents emphasizing security and trust.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #14b8a6;
        --surface: #ffffff;
        --surface-soft: #f8fafc;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #14b8a6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 26 – Gaming Arena
    - **Best-fit niche / product:** Gaming
    - **UI/UX description:** Electric purple and cyan with dynamic glow effects.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #eab308;
        --secondary: #f97316;
        --surface: #0b0f1a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #eab308, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #eab308;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 27 – Fashion Runway
    - **Best-fit niche / product:** Fashion / Apparel
    - **UI/UX description:** High-contrast black/white with elegant serif accents.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #f472b6;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 28 – Beauty Luxe
    - **Best-fit niche / product:** Luxury Beauty
    - **UI/UX description:** Champagne gradients with glossy card edges.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #6366f1;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #6366f1, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #6366f1;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 29 – Smart Home
    - **Best-fit niche / product:** Smart Home
    - **UI/UX description:** Cool gray with neon teal accents for a tech-forward vibe.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #f97316;
        --surface: #f8fafc;
        --surface-soft: #ffffff;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 30 – Sports Pro
    - **Best-fit niche / product:** Sports Gear
    - **UI/UX description:** Bold primary accents with tight spacing and strong hierarchy.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #3b82f6;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #3b82f6, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #3b82f6;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 31 – Bakery Sunshine
    - **Best-fit niche / product:** Bakery / Dessert
    - **UI/UX description:** Warm buttery tones with soft shadows and sweetness cues.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f59e0b;
        --secondary: #f97316;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f59e0b, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f59e0b;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 32 – Crypto Signal
    - **Best-fit niche / product:** Crypto / Web3
    - **UI/UX description:** Dark base with luminous green accents and sharp outlines.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f97316;
        --secondary: #f472b6;
        --surface: #fff7ed;
        --surface-soft: #ffffff;
        --text: #1f2937;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f97316, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f97316;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 33 – Wellness Zen
    - **Best-fit niche / product:** Wellness / Spa
    - **UI/UX description:** Muted sage palette with calm spacing and gentle gradients.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #a78bfa;
        --surface: #0b1120;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #a78bfa);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 34 – Photography Studio
    - **Best-fit niche / product:** Photography
    - **UI/UX description:** Deep charcoal with clean white highlights and gallery framing.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #16a34a;
        --secondary: #facc15;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #16a34a, #facc15);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #16a34a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 35 – Luxury Yacht
    - **Best-fit niche / product:** Luxury Travel
    - **UI/UX description:** Navy + gold with glossy surfaces and wide spacing.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #14b8a6;
        --surface: #ffffff;
        --surface-soft: #f8fafc;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #14b8a6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 36 – Organic Farm
    - **Best-fit niche / product:** Groceries / Organic
    - **UI/UX description:** Olive green with grainy background and wholesome layout.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #eab308;
        --secondary: #f97316;
        --surface: #0b0f1a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #eab308, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #eab308;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 37 – Beauty Clinic
    - **Best-fit niche / product:** Aesthetic Clinic
    - **UI/UX description:** Pearl whites with rose accents and clinical polish.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #f472b6;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 38 – Music Vibe
    - **Best-fit niche / product:** Music / Audio
    - **UI/UX description:** Violet gradients with equalizer-like accents.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #6366f1;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #6366f1, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #6366f1;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 39 – Hardware Pro
    - **Best-fit niche / product:** Tools / Hardware
    - **UI/UX description:** Industrial gray with orange warnings and solid borders.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #f97316;
        --surface: #f8fafc;
        --surface-soft: #ffffff;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 40 – Smart Fitness
    - **Best-fit niche / product:** Wearables
    - **UI/UX description:** Electric lime accents with sleek panels.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #3b82f6;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #3b82f6, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #3b82f6;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 41 – Kids Learning
    - **Best-fit niche / product:** Kids Education
    - **UI/UX description:** Sunny palette with soft outlines and friendly shapes.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f59e0b;
        --secondary: #f97316;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f59e0b, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f59e0b;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 42 – Luxury Leather
    - **Best-fit niche / product:** Accessories
    - **UI/UX description:** Warm leather browns with stitched card effects.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #f97316;
        --secondary: #f472b6;
        --surface: #fff7ed;
        --surface-soft: #ffffff;
        --text: #1f2937;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #f97316, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #f97316;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 43 – Eco Mobility
    - **Best-fit niche / product:** E-bike / Mobility
    - **UI/UX description:** Fresh greens with speed lines and aerodynamic shapes.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #a78bfa;
        --surface: #0b1120;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #a78bfa);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 44 – Chef Select
    - **Best-fit niche / product:** Kitchenware
    - **UI/UX description:** Slate + copper palette with premium cookware feel.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #16a34a;
        --secondary: #facc15;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #cbd5f5;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #16a34a, #facc15);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #16a34a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 45 – Gourmet Olive
    - **Best-fit niche / product:** Gourmet Food
    - **UI/UX description:** Olive and cream tones with tasteful separators.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #14b8a6;
        --surface: #ffffff;
        --surface-soft: #f8fafc;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #14b8a6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 46 – Salon Chic
    - **Best-fit niche / product:** Salon / Hair
    - **UI/UX description:** Rosewood tones with elegant highlights.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #eab308;
        --secondary: #f97316;
        --surface: #0b0f1a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 24px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 24px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(2,6,23,0.5);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #eab308, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 14px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 24px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #eab308;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 14px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 24px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 47 – Travel Desert
    - **Best-fit niche / product:** Desert Tours
    - **UI/UX description:** Sand gradients with geometric accents and warmth.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #22d3ee;
        --secondary: #f472b6;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 18px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 18px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 40px rgba(15,23,42,0.25);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #22d3ee, #f472b6);
        color: #fff;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 18px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #22d3ee;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 999px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 18px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 48 – Mountain Gear
    - **Best-fit niche / product:** Hiking Gear
    - **UI/UX description:** Granite tones with rugged borders and bold CTA.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #6366f1;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #9ca3af;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 28px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 28px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 22px 50px rgba(2,6,23,0.4);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #6366f1, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 12px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(15,23,42,0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 28px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #6366f1;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 28px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 49 – Urban Minimal
    - **Best-fit niche / product:** Streetwear
    - **UI/UX description:** Muted monochrome with strong typographic hierarchy.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #0f172a;
        --secondary: #f97316;
        --surface: #f8fafc;
        --surface-soft: #ffffff;
        --text: #0f172a;
        --muted: #6b7280;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 14px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 14px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 16px 30px rgba(15,23,42,0.3);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #0f172a, #f97316);
        color: #fff;
        padding: 12px 22px;
        border-radius: 10px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 14px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #0f172a;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 14px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```

### Theme 50 – Solar Studio
    - **Best-fit niche / product:** Solar / Renewable
    - **UI/UX description:** Bright sunlit gradients with optimistic energy cues.
    - **CSS:**
    ```css
    <style>
    .modern-template {
        --primary: #3b82f6;
        --secondary: #22d3ee;
        --surface: #0f172a;
        --surface-soft: #111827;
        --text: #f8fafc;
        --muted: #94a3b8;
        font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    }

    .modern-template {
        color: var(--text);
        background: radial-gradient(circle at top, rgba(255,255,255,0.04), transparent 55%), var(--surface);
        border-radius: 32px;
        padding: 8px;
    }

    .modern-template .hero-wrap {
        background: linear-gradient(135deg, rgba(255,255,255,0.06), transparent 60%), var(--surface);
        border-radius: 32px;
        padding: 48px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 26px 50px rgba(2,6,23,0.35);
    }

    .modern-template .price-tag {
        background: linear-gradient(120deg, #3b82f6, #22d3ee);
        color: #fff;
        padding: 12px 22px;
        border-radius: 16px;
        font-weight: 700;
    }

    .modern-template .feature-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
        transition: transform 0.2s ease, border 0.2s ease;
    }

    .modern-template .feature-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .modern-template .gallery img {
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.35);
    }

    .modern-template .order-card {
        background: var(--surface-soft);
        border-radius: 32px;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 18px 30px rgba(2, 6, 23, 0.3);
    }

    .modern-template .order-summary {
        background: rgba(15, 23, 42, 0.6);
        border-radius: 14px;
        padding: 16px;
        border: 1px dashed rgba(255, 255, 255, 0.15);
    }

    .modern-template .btn-accent {
        background: #3b82f6;
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 16px;
        padding: 12px 18px;
        box-shadow: 0 12px 20px rgba(0,0,0,0.25);
    }

    .modern-template .badge {
        background: rgba(255, 255, 255, 0.12);
        color: var(--text);
        border-radius: 999px;
    }

    .modern-template .section-alt {
        background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(0,0,0,0.15));
        border-radius: 32px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-template .text-secondary {
        color: var(--muted) !important;
    }
</style>
    ```
