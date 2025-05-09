# Laravel 12 全域性範圍

可以讓你為給定模型新增條件到所有查詢。Laravel 自己的軟刪除功能利用全域性範圍能從資料庫中只取出「未刪除」模型。撰寫自己全域性範圍能提供更方便且簡單的方式來確保給定模型的每個查詢都能受到一定的限制。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/user` 來進行全域性範圍語法輸出。

----

## 畫面截圖
![](https://i.imgur.com/3xVteCn.png)
> 用虛擬層一個很有趣的地方，利用範圍可以給模型內所有執行的查詢設定一樣的預設限制，或甚至給所有的查詢設定一樣的預設限制
