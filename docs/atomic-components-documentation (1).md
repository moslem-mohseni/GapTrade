# کامپوننت‌های اتمی GapTrade

تمامی کامپوننت‌های اتمی در مسیر `src/components/atoms` قرار دارند.

## 1. دکمه‌ها (Button.svelte)

دکمه‌های چند منظوره با استایل‌های مختلف.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| variant | 'primary' \| 'secondary' \| 'neutral' \| 'link' | 'primary' | نوع ظاهری دکمه |
| size | 'sm' \| 'md' \| 'lg' | 'md' | اندازه دکمه |
| fullWidth | boolean | false | آیا دکمه عرض کامل داشته باشد |
| disabled | boolean | false | غیرفعال کردن دکمه |
| type | 'button' \| 'submit' \| 'reset' | 'button' | نوع HTML دکمه |
| onClick | () => void | () => {} | تابع رویداد کلیک |

### مثال

```svelte
<Button variant="primary" size="md">ثبت‌نام</Button>
<Button variant="secondary" disabled={true}>انصراف</Button>
<Button variant="link">مشاهده همه</Button>
```

## 2. فیلدهای ورودی (Input.svelte)

فیلدهای ورودی متنی با پشتیبانی از انواع مختلف.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| type | 'text' \| 'email' \| 'password' \| 'number' \| 'search' \| 'tel' | 'text' | نوع ورودی |
| id | string | '' | شناسه فیلد |
| name | string | '' | نام فیلد |
| value | string | '' | مقدار فیلد |
| placeholder | string | '' | متن راهنما |
| disabled | boolean | false | غیرفعال کردن فیلد |
| readonly | boolean | false | فقط خواندنی |
| required | boolean | false | الزامی بودن |
| error | string | '' | پیام خطا |
| success | boolean | false | وضعیت موفقیت |
| icon | string | '' | آیکون کنار فیلد |
| iconPosition | 'left' \| 'right' | 'left' | موقعیت آیکون |

### مثال

```svelte
<Input type="email" placeholder="ایمیل خود را وارد کنید" />
<Input type="password" placeholder="رمز عبور" />
<Input type="search" placeholder="جستجو..." />
```

### نکات

- برای فیلدهای رمز عبور، دکمه نمایش/مخفی‌سازی به صورت خودکار نمایش داده می‌شود.
- برای فیلدهای جستجو، آیکون جستجو به صورت خودکار نمایش داده می‌شود.

## 3. چک‌باکس و رادیو (Checkbox.svelte و RadioButton.svelte)

عناصر انتخابی با استایل سفارشی.

### پراپرتی‌های Checkbox

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| id | string | '' | شناسه چک‌باکس |
| name | string | '' | نام چک‌باکس |
| checked | boolean | false | وضعیت انتخاب |
| disabled | boolean | false | غیرفعال کردن |
| label | string | '' | برچسب متنی |
| indeterminate | boolean | false | حالت نامشخص |

### پراپرتی‌های RadioButton

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| id | string | '' | شناسه دکمه رادیویی |
| name | string | '' | نام دکمه رادیویی |
| value | string | '' | مقدار دکمه رادیویی |
| group | string | '' | گروه دکمه‌های رادیویی |
| disabled | boolean | false | غیرفعال کردن |
| label | string | '' | برچسب متنی |

### مثال

```svelte
<Checkbox label="مرا به خاطر بسپار" />
<RadioButton name="gender" value="male" group={gender} label="مرد" />
<RadioButton name="gender" value="female" group={gender} label="زن" />
```

## 4. فضای متنی (Typography.svelte)

انواع مختلف متون با استایل‌های از پیش تعریف شده.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| variant | 'h1' \| 'h2' \| 'h3' \| 'h4' \| 'h5' \| 'h6' \| 'body' \| 'body-small' \| 'caption' | 'body' | نوع متن |
| color | 'default' \| 'muted' \| 'primary' \| 'success' \| 'error' | 'default' | رنگ متن |
| align | 'right' \| 'left' \| 'center' | 'right' | ترازبندی متن |
| weight | 'normal' \| 'medium' \| 'semibold' \| 'bold' | 'normal' | وزن فونت |
| truncate | boolean | false | کوتاه کردن متن با سه نقطه |
| margin | string | '0' | حاشیه متن |

### مثال

```svelte
<Typography variant="h1" color="primary">عنوان اصلی</Typography>
<Typography variant="body" color="muted">متن توضیحات که کمی کمرنگ‌تر است.</Typography>
<Typography variant="caption" truncate={true}>متن بسیار طولانی که در صورت لزوم کوتاه می‌شود...</Typography>
```

## 5. آیکون‌ها (Icon.svelte)

مجموعه آیکون‌های خطی Feather با سایز و رنگ قابل تنظیم.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| name | string | '' | نام آیکون |
| size | 'sm' \| 'md' \| 'lg' \| 'xl' | 'md' | اندازه آیکون |
| color | 'default' \| 'muted' \| 'primary' \| 'success' \| 'error' \| 'white' | 'default' | رنگ آیکون |
| strokeWidth | number | 2 | ضخامت خط آیکون |

### مثال

```svelte
<Icon name="search" />
<Icon name="user" size="lg" color="primary" />
<Icon name="check-circle" color="success" strokeWidth={3} />
```

### نکات

- اسامی آیکون‌ها در فایل `icons.ts` تعریف شده‌اند.
- تمام آیکون‌ها از کتابخانه Feather گرفته شده‌اند.

## 6. برچسب‌ها و نشانگرها (Badge.svelte و Tag.svelte)

برچسب‌های کوچک برای نمایش وضعیت‌ها و تگ‌ها برای دسته‌بندی.

### پراپرتی‌های Badge

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| text | string | '' | متن برچسب |
| variant | 'default' \| 'primary' \| 'success' \| 'warning' \| 'error' \| 'new' \| 'featured' | 'default' | نوع برچسب |
| size | 'sm' \| 'md' | 'md' | اندازه برچسب |
| pill | boolean | false | گرد بودن کامل لبه‌ها |
| outlined | boolean | false | نمایش به صورت خط دور |
| icon | string | '' | آیکون کنار برچسب |

### پراپرتی‌های Tag

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| text | string | '' | متن تگ |
| active | boolean | false | وضعیت فعال بودن |
| clickable | boolean | true | قابلیت کلیک |
| onRemove | (() => void) \| null | null | تابع حذف تگ |

### مثال

```svelte
<Badge text="جدید" variant="new" />
<Badge text="۲۵٪ تخفیف" variant="primary" pill={true} />

<Tag text="آربیتراژ" active={true} />
<Tag text="بیت‌کوین" onRemove={() => handleRemoveTag('bitcoin')} />
```

## 7. کارت‌های پایه (Card.svelte)

کارت‌های با پس‌زمینه نیمه‌شفاف برای نمایش محتوا.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| variant | 'default' \| 'hover' \| 'interactive' | 'default' | نوع کارت |
| padding | 'none' \| 'sm' \| 'md' \| 'lg' | 'md' | اندازه پدینگ داخلی |
| borderAccent | 'none' \| 'top' \| 'right' \| 'bottom' \| 'left' | 'none' | موقعیت حاشیه رنگی |
| borderAccentColor | 'primary' \| 'success' \| 'error' | 'primary' | رنگ حاشیه |
| elevation | 'none' \| 'sm' \| 'md' \| 'lg' | 'sm' | میزان سایه |
| width | string | 'auto' | عرض کارت |
| height | string | 'auto' | ارتفاع کارت |

### مثال

```svelte
<Card variant="hover" padding="md">
  <h3>عنوان کارت</h3>
  <p>محتوای کارت در اینجا قرار می‌گیرد.</p>
</Card>

<Card variant="interactive" borderAccent="right" borderAccentColor="primary">
  <span>کارت قابل کلیک با حاشیه رنگی سمت راست</span>
</Card>
```

### نکات

- `variant="interactive"` به کارت cursor:pointer و افکت هاور اضافه می‌کند.
- `variant="hover"` فقط افکت هاور اضافه می‌کند بدون pointer.

## 8. تصاویر و آواتارها (Image.svelte و Avatar.svelte)

نمایش تصاویر و آواتارهای کاربران با قابلیت‌های مختلف.

### پراپرتی‌های Image

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| src | string | - | آدرس تصویر |
| alt | string | '' | متن جایگزین |
| width | string | 'auto' | عرض تصویر |
| height | string | 'auto' | ارتفاع تصویر |
| fit | 'contain' \| 'cover' \| 'fill' \| 'none' | 'cover' | نحوه پوشش تصویر |
| rounded | boolean | true | گرد بودن گوشه‌ها |
| roundedSize | 'sm' \| 'md' \| 'lg' \| 'xl' \| 'full' | 'md' | میزان گردی گوشه‌ها |
| overlay | boolean | false | نمایش روکش روی تصویر |
| overlayColor | 'dark' \| 'light' \| 'primary' | 'dark' | رنگ روکش |
| aspectRatio | string | 'auto' | نسبت ابعاد تصویر |
| loading | 'eager' \| 'lazy' | 'lazy' | نحوه بارگذاری |
| fallbackSrc | string | '' | تصویر جایگزین در صورت خطا |

### پراپرتی‌های Avatar

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| src | string | '' | آدرس تصویر آواتار |
| alt | string | '' | متن جایگزین |
| size | 'xs' \| 'sm' \| 'md' \| 'lg' \| 'xl' | 'md' | اندازه آواتار |
| shape | 'circle' \| 'square' \| 'rounded' | 'circle' | شکل آواتار |
| border | boolean | false | نمایش حاشیه |
| borderColor | 'primary' \| 'white' \| 'transparent' | 'primary' | رنگ حاشیه |
| status | 'none' \| 'online' \| 'offline' \| 'busy' \| 'away' | 'none' | وضعیت کاربر |
| name | string | '' | نام کاربر برای حروف اول |

### مثال

```svelte
<Image src="/images/banner.jpg" alt="بنر اصلی" rounded={true} overlay={true} />

<Avatar src="/images/user.jpg" size="md" status="online" />
<Avatar name="علی محمدی" size="lg" />
```

### نکات

- آواتار در صورت عدم وجود تصویر، از حروف اول نام استفاده می‌کند.
- آواتار رنگ پس‌زمینه تصادفی (اما ثابت برای هر نام) تولید می‌کند.

## 9. المان‌های جداکننده (Divider.svelte)

خطوط جداکننده افقی و عمودی.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| orientation | 'horizontal' \| 'vertical' | 'horizontal' | جهت خط |
| thickness | number | 1 | ضخامت خط |
| color | 'default' \| 'primary' \| 'light' \| 'custom' | 'default' | رنگ خط |
| customColor | string | '' | رنگ سفارشی |
| style | 'solid' \| 'dashed' \| 'dotted' | 'solid' | استایل خط |
| margin | string | orientation === 'horizontal' ? '1rem 0' : '0 1rem' | حاشیه |
| width | string | orientation === 'horizontal' ? '100%' : `${thickness}px` | عرض |
| height | string | orientation === 'vertical' ? '100%' : `${thickness}px` | ارتفاع |
| opacity | number | 0.1 | شفافیت |
| gradient | boolean | false | نمایش به صورت گرادیان |

### مثال

```svelte
<Divider />
<Divider color="primary" opacity={0.3} />
<Divider orientation="vertical" height="100px" />
<Divider gradient={true} />
```

## 10. توضیحات و هشدارها (Tooltip.svelte و Alert.svelte)

نمایش توضیحات کمکی و پیام‌های هشدار.

### پراپرتی‌های Tooltip

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| text | string | '' | متن تولتیپ |
| position | 'top' \| 'right' \| 'bottom' \| 'left' | 'top' | موقعیت نمایش |
| showDelay | number | 200 | تاخیر نمایش (میلی‌ثانیه) |
| hideDelay | number | 0 | تاخیر مخفی شدن (میلی‌ثانیه) |
| width | string | 'auto' | عرض تولتیپ |
| dark | boolean | true | استایل تیره |

### پراپرتی‌های Alert

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| variant | 'info' \| 'success' \| 'warning' \| 'error' | 'info' | نوع هشدار |
| title | string | '' | عنوان هشدار |
| message | string | '' | پیام هشدار |
| dismissible | boolean | false | قابلیت بستن |
| icon | boolean | true | نمایش آیکون |
| outlined | boolean | false | نمایش به صورت خط دور |
| width | string | 'auto' | عرض هشدار |

### مثال

```svelte
<Tooltip text="این یک متن راهنماست" position="top">
  <button>راهنما</button>
</Tooltip>

<Alert 
  variant="warning" 
  title="هشدار" 
  message="این یک پیام هشدار است." 
  dismissible={true} 
/>
```

## 11. لودرها و اسپینرها (Spinner.svelte)

نمایش وضعیت بارگذاری.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| size | 'xs' \| 'sm' \| 'md' \| 'lg' | 'md' | اندازه اسپینر |
| color | 'primary' \| 'white' \| 'light' | 'primary' | رنگ اسپینر |
| variant | 'circle' \| 'dots' | 'circle' | نوع اسپینر |
| fullScreen | boolean | false | نمایش تمام صفحه |

### مثال

```svelte
<Spinner size="md" color="primary" />
<Spinner variant="dots" color="white" />
<Spinner fullScreen={true}>در حال بارگذاری...</Spinner>
```

## 12. پیشرفت نما (ProgressBar.svelte)

نمایش درصد پیشرفت.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| value | number | 0 | مقدار فعلی |
| max | number | 100 | مقدار حداکثر |
| height | 'xs' \| 'sm' \| 'md' \| 'lg' | 'md' | ارتفاع نوار |
| color | 'primary' \| 'success' \| 'warning' \| 'error' \| 'info' | 'primary' | رنگ نوار |
| showValue | boolean | false | نمایش مقدار |
| valueFormat | 'percent' \| 'fraction' | 'percent' | قالب نمایش مقدار |
| animated | boolean | true | انیمیشن |
| striped | boolean | false | نمایش به صورت راه‌راه |
| rounded | boolean | true | گرد بودن نوار |

### مثال

```svelte
<ProgressBar value={75} showValue={true} />
<ProgressBar value={50} max={200} color="warning" striped={true} />
<ProgressBar value={25} height="lg" valueFormat="fraction" />
```

## 13. نشانگرهای وضعیت (StatusIndicator.svelte)

نمایش وضعیت‌های مختلف با نشانگر رنگی.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| status | 'active' \| 'inactive' \| 'pending' \| 'success' \| 'error' \| 'warning' | 'active' | وضعیت |
| size | 'xs' \| 'sm' \| 'md' \| 'lg' | 'md' | اندازه نشانگر |
| withLabel | boolean | false | نمایش برچسب |
| pulseEffect | boolean | true | نمایش افکت ضربان |

### مثال

```svelte
<StatusIndicator status="active" />
<StatusIndicator status="pending" withLabel={true} />
<StatusIndicator status="error" size="lg" pulseEffect={false} />
```

## 14. فرم‌های متنی چند خطی (Textarea.svelte)

فیلدهای ورودی چند خطی.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| id | string | '' | شناسه فیلد |
| name | string | '' | نام فیلد |
| value | string | '' | مقدار فیلد |
| placeholder | string | '' | متن راهنما |
| rows | number | 4 | تعداد خطوط |
| maxlength | number \| undefined | undefined | حداکثر طول متن |
| disabled | boolean | false | غیرفعال کردن |
| readonly | boolean | false | فقط خواندنی |
| required | boolean | false | الزامی بودن |
| error | string | '' | پیام خطا |
| success | boolean | false | وضعیت موفقیت |
| resizable | boolean | true | قابلیت تغییر اندازه |
| autoGrow | boolean | false | افزایش خودکار ارتفاع |

### مثال

```svelte
<Textarea placeholder="توضیحات خود را وارد کنید..." rows={6} />
<Textarea value={text} autoGrow={true} maxlength={500} />
```

## 15. کمبوباکس و سلکت (Select.svelte)

منوهای کشویی برای انتخاب از میان گزینه‌ها.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| id | string | '' | شناسه سلکت |
| name | string | '' | نام سلکت |
| value | string \| string[] | '' | مقدار انتخاب شده |
| placeholder | string | 'انتخاب کنید...' | متن راهنما |
| options | Array<{value: string, label: string}> | [] | گزینه‌ها |
| disabled | boolean | false | غیرفعال کردن |
| required | boolean | false | الزامی بودن |
| error | string | '' | پیام خطا |
| success | boolean | false | وضعیت موفقیت |
| multiple | boolean | false | انتخاب چندگانه |
| size | number | 1 | تعداد گزینه‌های قابل مشاهده |

### مثال

```svelte
<Select 
  options={[
    { value: 'btc', label: 'بیت‌کوین' },
    { value: 'eth', label: 'اتریوم' },
    { value: 'usdt', label: 'تتر' }
  ]} 
  bind:value={selectedCoin}
/>

<Select multiple={true} bind:value={selectedCoins} size={3} />
```

## 16. تاگل سوئیچ (Toggle.svelte)

کلیدهای تغییر وضعیت روشن/خاموش.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| checked | boolean | false | وضعیت روشن/خاموش |
| disabled | boolean | false | غیرفعال کردن |
| size | 'sm' \| 'md' \| 'lg' | 'md' | اندازه کلید |
| label | string | '' | برچسب متنی |
| id | string | '' | شناسه |
| name | string | '' | نام |

### مثال

```svelte
<Toggle bind:checked={darkMode} label="حالت تاریک" />
<Toggle size="lg" disabled={true} />
```

## 17. بج‌های نشان‌دهنده بخش ویژه (FeaturedBadge.svelte)

برچسب‌های ویژه برای نمایش در گوشه‌های مختلف کارت‌ها.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| text | string | 'ویژه' | متن برچسب |
| position | 'top-right' \| 'top-left' \| 'bottom-right' \| 'bottom-left' | 'top-right' | موقعیت |
| color | 'primary' \| 'success' \| 'warning' \| 'error' \| 'info' | 'primary' | رنگ |
| size | 'sm' \| 'md' \| 'lg' | 'md' | اندازه |
| withIcon | boolean | true | نمایش آیکون |
| animated | boolean | true | انیمیشن |
| rotated | boolean | true | چرخش ۴۵ درجه |

### مثال

```svelte
<div class="relative">
  <Card>محتوای کارت</Card>
  <FeaturedBadge text="جدید" position="top-right" color="primary" />
</div>

<div class="relative">
  <Card>محتوای کارت</Card>
  <FeaturedBadge text="۲۵٪ تخفیف" position="top-left" color="success" rotated={false} />
</div>
```

## 18. المان‌های رنگی (ColorSwatch.svelte)

نمایش نمونه‌های رنگی.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| color | string | - | رنگ |
| name | string | '' | نام رنگ |
| textColor | 'light' \| 'dark' | 'light' | رنگ متن |
| size | 'sm' \| 'md' \| 'lg' | 'md' | اندازه |
| rounded | 'none' \| 'sm' \| 'md' \| 'lg' \| 'full' | 'md' | میزان گردی گوشه‌ها |
| showHex | boolean | false | نمایش کد هگز |
| clickable | boolean | false | قابلیت کلیک (کپی کردن کد رنگ) |
| variant | 'fill' \| 'outline' | 'fill' | استایل نمایش |

### مثال

```svelte
<ColorSwatch color="primary" name="رنگ اصلی" showHex={true} />
<ColorSwatch color="#ff9500" name="نارنجی" clickable={true} />
<ColorSwatch color="background-dark" variant="outline" />
```

### نکات

- از نام‌های رنگ متغیر مثل `primary` یا کدهای هگز مثل `#ff9500` می‌توان استفاده کرد.
- کلیک روی رنگ‌های clickable کد رنگ را در کلیپ‌بورد کپی می‌کند.

## 19. فیلدهای کد تایید (VerificationCodeInput.svelte)

ورودی کدهای تایید چند رقمی.

### پراپرتی‌ها

| نام | نوع | پیش‌فرض | توضیحات |
| --- | --- | --- | --- |
| length | number | 6 | تعداد کاراکترها |
| value | string | '' | مقدار کد |
| placeholder | string | '•' | نماد جایگزین |
| type | 'text' \| 'number' \| 'password' | 'text' | نوع ورودی |
| disabled | boolean | false | غیرفعال کردن |
| autoFocus | boolean | true | فوکوس خودکار |
| onComplete | ((code: string) => void) \| null | null | تابع تکمیل کد |

### مثال

```svelte
<VerificationCodeInput 
  length={4} 
  bind:value={verificationCode} 
  onComplete={(code) => handleVerification(code)}
/>

<VerificationCodeInput type="password" placeholder="*" />
```

### نکات

- پشتیبانی از فوکوس خودکار و حرکت بین کادرها
- پشتیبانی از Paste کردن کد کامل
- پشتیبانی از کلیدهای جهت‌دار برای حرکت بین کادرها
