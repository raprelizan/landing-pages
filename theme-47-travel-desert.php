<?php
$sidebar = null;
$title = $page['title'];
$subtitle = $merchant['name'] . ' - عرض حصري';
$gallery = array_filter(array_map('trim', explode(',', $pageData['gallery'] ?? '')));
$deliveryPrice = (int) ($pageData['delivery_price'] ?? 500);
$productPrice = (int) preg_replace('/[^0-9]/', '', $page['price']);
$deliveryPricesJson = json_encode($deliveryPrices ?? [], JSON_UNESCAPED_UNICODE);
$wilayas = [
    'أدرار', 'الشلف', 'الأغواط', 'أم البواقي', 'باتنة', 'بجاية', 'بسكرة', 'بشار', 'البليدة', 'البويرة',
    'تمنراست', 'تبسة', 'تلمسان', 'تيارت', 'تيزي وزو', 'الجزائر', 'الجلفة', 'جيجل', 'سطيف', 'سعيدة',
    'سكيكدة', 'سيدي بلعباس', 'عنابة', 'قالمة', 'قسنطينة', 'المدية', 'مستغانم', 'المسيلة', 'معسكر', 'ورقلة',
    'وهران', 'البيض', 'إليزي', 'برج بوعريريج', 'بومرداس', 'الطارف', 'تندوف', 'تيسمسيلت', 'الوادي', 'خنشلة',
    'سوق أهراس', 'تيبازة', 'ميلة', 'عين الدفلى', 'النعامة', 'عين تموشنت', 'غرداية', 'غليزان', 'تيميمون', 'برج باجي مختار',
    'أولاد جلال', 'بني عباس', 'إن صالح', 'إن قزام', 'توقرت', 'جانت', 'المغير', 'المنيعة'
];
$featureLines = array_filter(array_map('trim', explode("\n", $pageData['features'] ?? '')));
ob_start();
?>
<style>
.modern-template {
    --primary: #f59e0b;
    --secondary: #f97316;
    --surface: #fffbeb;
    --surface-soft: #ffffff;
    --text: #1f2937;
    --muted: #6b7280;
    --radius: 22px;
    font-family: 'Cairo', 'Tajawal', system-ui, -apple-system, sans-serif;
    color: var(--text);
    background: var(--surface);
    border-radius: calc(var(--radius) + 4px);
    padding: 10px;
}

.modern-template .landing-hero {
    padding-bottom: 12px;
}

.modern-template .hero-wrap {
    background: radial-gradient(circle at bottom left, rgba(255,255,255,0.2), transparent 55%), var(--surface);
    border-radius: var(--radius);
    padding: 54px;
    border: 1px solid rgba(255,255,255,0.2);
    border: 1px solid rgba(0,0,0,0.12); box-shadow: 0 18px 36px rgba(2,6,23,0.2);
}

.modern-template h1 {
    font-weight: 700; line-height: 1.2;
}

.modern-template .price-tag {
    background: rgba(0,0,0,0.2); color: var(--text); border: 1px dashed rgba(255,255,255,0.3);
    padding: 12px 22px;
    border-radius: 999px;
    font-weight: 700;
    box-shadow: 0 10px 22px rgba(0,0,0,0.18);
}

.modern-template .badge {
    background: rgba(255,255,255,0.08); color: var(--text);
    border-radius: 999px;
    padding: 6px 12px;
    font-weight: 600;
}

.modern-template .feature-card {
    background: rgba(255,255,255,0.04); border: 2px solid rgba(255,255,255,0.2);
    border: 2px solid rgba(0,0,0,0.08);
    border-radius: calc(var(--radius) - 2px);
    padding: 18px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.modern-template .feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 26px rgba(2, 6, 23, 0.2);
}

.modern-template .gallery img {
    border-radius: calc(var(--radius) + 4px);
    border: 1px solid rgba(255,255,255,0.15);
    box-shadow: 0 16px 28px rgba(2, 6, 23, 0.3);
}

.modern-template .gallery-placeholder {
    border-radius: calc(var(--radius) + 4px);
    border: 1px dashed rgba(255,255,255,0.2);
    padding: 24px;
    text-align: center;
    color: var(--muted);
}

.modern-template .order-card {
    background: var(--surface-soft);
    border-radius: var(--radius);
    padding: 28px;
    border: 1px solid rgba(0,0,0,0.12); box-shadow: 0 18px 36px rgba(2,6,23,0.2);
}

.modern-template .order-card h4 {
    font-weight: 700;
    letter-spacing: -0.3px;
}

.modern-template .order-card .form-control,
.modern-template .order-card .form-select {
    background-color: #ffffff; border: 1px solid rgba(0,0,0,0.1); border-radius: 16px;
    color: var(--text);
    padding: 12px 14px;
}

.modern-template .order-card .form-control::placeholder {
    color: var(--muted);
}

.modern-template .order-summary {
    background: rgba(0,0,0,0.08);
    border-radius: 14px;
    padding: 16px;
    border: 1px dashed rgba(255,255,255,0.2);
}

.modern-template .summary-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
}

.modern-template .summary-row.total strong {
    color: var(--secondary);
}

.modern-template .btn-accent {
    background: rgba(255,255,255,0.12); color: var(--text); border: 1px solid rgba(255,255,255,0.3); border-radius: 12px;
    border: none;
    font-weight: 700;
    padding: 12px 18px;
    box-shadow: 0 12px 22px rgba(0,0,0,0.2);
}

.modern-template .section-alt {
    background: linear-gradient(180deg, rgba(255,255,255,0.08), rgba(0,0,0,0.18)); border: 1px solid rgba(0,0,0,0.08);
    border-radius: var(--radius);
    padding: 38px;
}

.modern-template .section-title h3::after {
    content: "";
    display: block;
    width: 52px;
    height: 3px;
    margin-top: 10px;
    border-radius: 999px;
    background: linear-gradient(120deg, var(--primary), var(--secondary));
}

.modern-template .text-secondary {
    color: var(--muted) !important;
}

@media (max-width: 991px) {
    .modern-template .hero-wrap {
        padding: 36px;
    }
    .modern-template .order-card {
        padding: 22px;
    }
}
</style>
<div class="modern-template">
<section class="landing-hero">
    <div class="container">
        <div class="hero-wrap">
            <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <span class="badge text-bg-success">الدفع عند الاستلام</span>
                    <span class="badge text-bg-primary">توصيل سريع</span>
                </div>
                <h1 class="display-5 fw-bold mb-3"><?= htmlspecialchars($pageData['headline'] ?? $page['title']) ?></h1>
                <p class="lead text-secondary mb-4"><?= htmlspecialchars($pageData['subheadline'] ?? $page['description']) ?></p>
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <div class="price-tag"><?= htmlspecialchars($page['price']) ?> دج</div>
                    <span class="text-secondary">شامل ضمان الجودة والدفع الآمن</span>
                </div>
                <div class="row g-3 mt-4">
                    <?php foreach ($featureLines as $feature) : ?>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <i class="bi bi-check2-circle"></i>
                                <p class="mb-0 mt-2"><?= htmlspecialchars($feature) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card app-card mb-4">
                    <div class="card-body">
                        <div class="gallery">
                            <?php if ($gallery) : ?>
                                <?php foreach ($gallery as $image) : ?>
                                    <img src="<?= htmlspecialchars($image) ?>" alt="صورة المنتج" class="img-fluid">
                                <?php endforeach; ?>
                            <?php else : ?>
                                <div class="gallery-placeholder">
                                    <i class="bi bi-camera"></i>
                                    <p>أضف صور المنتج من لوحة التاجر.</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="order-card">
                    <h4>اطلب الآن</h4>
                    <form method="post" action="/<?= htmlspecialchars($merchant['subdomain']) ?>/<?= htmlspecialchars($page['slug']) ?>/order" class="vstack gap-3" data-delivery="<?= $deliveryPrice ?>" data-product="<?= $productPrice ?>" data-delivery-map='<?= htmlspecialchars($deliveryPricesJson) ?>'>
                        <?= csrf_field() ?>
                        <input type="text" name="full_name" class="form-control" placeholder="الاسم الكامل" required>
                        <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" required>
                        <input type="text" name="address" class="form-control" placeholder="العنوان" required>
                        <select name="wilaya" class="form-select" required>
                            <option value="">اختر الولاية</option>
                            <?php foreach ($wilayas as $wilaya) : ?>
                                <option value="<?= htmlspecialchars($wilaya) ?>"><?= htmlspecialchars($wilaya) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="order-summary">
                            <div class="summary-row">
                                <span>سعر التوصيل</span>
                                <strong class="delivery-price"><?= $deliveryPrice ?> دج</strong>
                            </div>
                            <div class="summary-row total">
                                <span>الإجمالي</span>
                                <strong class="total-price"><?= $productPrice + $deliveryPrice ?> دج</strong>
                            </div>
                        </div>
                        <button class="btn btn-accent" type="submit">تأكيد الطلب</button>
                    </form>
                    <p class="text-secondary mt-2">سيتم التواصل معك مباشرة لتأكيد الطلب والشحن.</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="feature-section alt">
    <div class="container">
        <div class="section-alt">
            <div class="section-title">
                <h3>لماذا هذا المنتج؟</h3>
                <p class="text-secondary">تصميم عصري، جودة موثوقة، وخدمة عملاء تتابع طلبك حتى التسليم.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <i class="bi bi-stars"></i>
                        <h5 class="mt-3">جودة عالية</h5>
                        <p class="text-secondary mb-0">منتج مختار بعناية لضمان أفضل تجربة استخدام.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <i class="bi bi-truck"></i>
                        <h5 class="mt-3">شحن سريع</h5>
                        <p class="text-secondary mb-0">توصيل سريع لكل الولايات مع تحديث مستمر للحالة.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <i class="bi bi-shield-check"></i>
                        <h5 class="mt-3">دفع آمن</h5>
                        <p class="text-secondary mb-0">الدفع عند الاستلام لضمان راحة بالك.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script>
    const orderForm = document.querySelector('.order-card form');
    if (orderForm) {
        const baseDeliveryPrice = Number(orderForm.dataset.delivery || 500);
        const productPrice = Number(orderForm.dataset.product || 0);
        const deliveryMap = JSON.parse(orderForm.dataset.deliveryMap || '{}');
        const selectWilaya = orderForm.querySelector('select[name="wilaya"]');
        const deliveryEl = orderForm.querySelector('.delivery-price');
        const totalEl = orderForm.querySelector('.total-price');
        const resolveDelivery = () => {
            if (!selectWilaya) {
                return baseDeliveryPrice;
            }
            return Number(deliveryMap[selectWilaya.value]) || baseDeliveryPrice;
        };
        const updateTotals = () => {
            const currentDelivery = resolveDelivery();
            const total = productPrice + currentDelivery;
            if (deliveryEl) {
                deliveryEl.textContent = `${currentDelivery} دج`;
            }
            if (totalEl) {
                totalEl.textContent = `${total} دج`;
            }
        };
        if (selectWilaya) {
            selectWilaya.addEventListener('change', updateTotals);
        }
        updateTotals();
    }
</script>
<?php
$content = ob_get_clean();
require __DIR__ . '/../../layouts/app.php';
