# NewsSite

## 📌 Основни модули за MVP на новинарския сайт

### 💡 Фокус: Минимална функционалност, която ще направи сайта ЛАЙВ за 7 дни
### 1️⃣ Основни модули

#### ✅ Начална страница – Списък с новини, категории, търсене
#### ✅ Страници за новини – Пълна статия, SEO-friendly URL
#### ✅ Админ панел – CRUD за новини
#### ✅ RSS Feed – За Google News
#### ✅ SEO оптимизация – Meta тагове, sitemap
#### ✅ Автоматично публикуване във Facebook
#### ✅ Базова статистика – Колко пъти е четена статия
## 📌 Разбивка по приоритети

### 🔹 Фаза 1 (до ден 3) – Основен сайт
#### ✅ Инсталация на Laravel
#### ✅ База данни (структура: статии, категории, потребители)
#### ✅ CRUD за новини (админ панел)
#### ✅ Начална страница с последни новини
#### ✅ Страница за отделна новина

### 🔹 Фаза 2 (до ден 5) – SEO и Google News
#### ✅ RSS Feed за Google News
#### ✅ SEO meta тагове (title, description)
#### ✅ Open Graph за Facebook preview
#### ✅ XML Sitemap

### 🔹 Фаза 3 (до ден 7) – Автоматизации и финални детайли
#### ✅ Автоматично публикуване във Facebook
#### ✅ Базова статистика (прочитания на статии)
#### ✅ UI подобрения (готов Bootstrap/Tailwind шаблон)
## 📌 Бонус (ако остане време след MVP)

### 💡 Ако завършим бързо основното, можем да добавим:
#### ✅ Абонамент за новини (email newsletter)
#### ✅ Коментари под статиите
#### ✅ Реклама (AdSense, афилиейт линкове)

Google News няма директен API за публикуване, но можеш да използваш **Google Indexing API** за по-бързо индексиране на
новините ти. Това означава, че Google ще обхожда новите статии почти веднага след публикуването им.

### **Как да използваш Google Indexing API за новините си?**

🔹 **1. Активиране на Indexing API**

- Отиди на [Google Cloud Console](https://console.cloud.google.com/).
- Създай нов проект.
- Активирай **Indexing API** от секцията **API & Services**.
- Генерирай **Service Account Key** (JSON файл).

🔹 **2. Добавяне на JSON ключа в Laravel**

- Запази JSON файла в `storage/app/google-indexing.json`.
- Добави в `.env`:
  ```
  GOOGLE_SERVICE_ACCOUNT_JSON=storage/app/google-indexing.json
  ```

🔹 **3. Инсталирай Google API Client за Laravel**

```bash
composer require google/apiclient
```

🔹 **4. Създай Laravel Service за Indexing API**

```php
namespace App\Services;

use Google\Client;
use Google\Service\Indexing;
use Illuminate\Support\Facades\Log;

class GoogleIndexingService
{
    protected $client;
    protected $service;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setAuthConfig(storage_path('app/google-indexing.json'));
        $this->client->addScope(Indexing::INDEXING);

        $this->service = new Indexing($this->client);
    }

    public function submitUrl($url)
    {
        try {
            $postBody = new Indexing\UrlNotification([
                'url' => $url,
                'type' => 'URL_UPDATED'
            ]);

            $this->service->urlNotifications->publish($postBody);
            Log::info("URL submitted to Google Indexing API: " . $url);
        } catch (\Exception $e) {
            Log::error("Google Indexing API Error: " . $e->getMessage());
        }
    }
}
```

🔹 **5. Извикване при публикуване на новина**  
Добави в `News` модела:

```php
use App\Services\GoogleIndexingService;

protected static function booted()
{
    static::created(function ($news) {
        $indexingService = app(GoogleIndexingService::class);
        $indexingService->submitUrl(url("/news/{$news->slug}"));
    });
}
```

✅ **Какво прави това?**

- Всеки път, когато се публикува новина, тя автоматично се изпраща към Google за индексиране.
- Google ще я обхожда **почти веднага**, вместо да чакаш стандартното обхождане, което може да отнеме дни.

⚡ С това ще ускориш появата на статиите си в търсенето и Google News! 🚀

Ако сайтът е за новини, освен **Facebook** и **Google News**, има още няколко добри платформи, където можеш да
публикуваш автоматично:

### **1. Twitter (X) API**

📌 Позволява автоматично публикуване на новини в Twitter (с линк и хаштаг).  
✅ Подходящ за бързо разпространение и достигане до технологични ентусиасти.  
🔗 [Twitter API](https://developer.twitter.com/en/docs/twitter-api)

### **2. LinkedIn API**

📌 Ако новините са по-професионално насочени (AI, Big Data, блокчейн), LinkedIn може да бъде добра платформа.  
✅ Възможност за автоматично споделяне в бизнес среди.  
🔗 [LinkedIn API](https://learn.microsoft.com/en-us/linkedin/)

### **3. Telegram Bot API**

📌 Създаваш канал в **Telegram** и автоматично публикуваш новини там.  
✅ Полезно за абонати, които искат известия директно на телефона си.  
🔗 [Telegram Bot API](https://core.telegram.org/bots/api)

### **4. Reddit API**

📌 Ако новините са технологични, Reddit е добро място за дискусии.  
✅ Автоматично публикуване в релевантни subreddits (примерно r/technology, r/crypto, r/machinelearning).  
🔗 [Reddit API](https://www.reddit.com/dev/api/)

### **5. Medium API**

📌 Автоматично публикуване на по-задълбочени анализи и статии като блог постове в Medium.  
✅ Може да докарва органичен трафик към основния сайт.  
🔗 [Medium API](https://github.com/Medium/medium-api-docs)

### **6. Flipboard**

📌 Популярна платформа за събиране на новини – можеш да добавяш свои публикации.  
✅ Позволява автоматично добавяне на статии към твоя “магазин” в Flipboard.  
🔗 [Flipboard for Publishers](https://about.flipboard.com/publishers/)

### **7. Pinterest API**

📌 Ако имаш изображения/инфографики, може да публикуваш в Pinterest.  
✅ Работи добре за по-визуални новини, особено в областта на технологиите и иновациите.  
🔗 [Pinterest API](https://developers.pinterest.com/)

---

📢 **Най-добрата стратегия:**  
🔹 **Google News + Facebook + Twitter** – за максимален обхват  
🔹 **LinkedIn + Reddit** – за технологичната аудитория  
🔹 **Telegram + Flipboard** – за абонати, които искат директни новини

Ако искаш, можем да автоматизираме някои от тях! 🚀
