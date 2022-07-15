# hospitalRegistration 診所掛號管理系統

## 大綱
本專案是模擬醫院的掛號系統，主要功能有病患資料登入、掛號、候診看板、掛號統計。該系統的使用者主要是醫院櫃檯人員。
  
---
### 一、開發背景
這個專案本來是我學期末在小雞上工差一點就接到的案子，接洽到一半我就開始做了，結果對方已經找其他人了，所以我就想說把這份專案完成當作自己練習php吧。
### 二、開發工具
1. Html: 網頁基本架構(文字內容、圖片、表格)
2. Php: 網頁後端技術，將資料動態地呈現給使用者，包括:
    - 資料庫的輸出/輸入
    - 製作數位時鐘
    - 動態輸出表格
3. JavaScript: 
    - 處理年月日，並定時更新
    - 繪製圓餅圖(統計掛號科別人數)
4. Css: 網頁外觀的簡單修飾(NavBar)
6. SQL: 對資料庫內容進行Select、Insert、Update等操作

### 三、資料庫設計

**掛號管理系統資料庫可分為三張資料表，如下:**![](https://i.imgur.com/DQ8EFKq.png)

1. Depatment(科別) 資料表
![](https://i.imgur.com/7cTujIB.png)
2. Patient(病患) 資料表
![](https://i.imgur.com/vLwKI72.png)
3. Registeration(掛號) 資料表
![](https://i.imgur.com/hfD5SNt.png)

### 四、系統完成畫面
**依照導覽列可將系統分為以下六個頁面**
1. 主畫面: 歡迎介面
![](https://i.imgur.com/oXqCx0R.png)

2. 病患資料: 第一次來該醫院看診的病患，需填寫基本資料
![](https://i.imgur.com/JThwrN5.png)

3. 掛號登錄: 病患欲看診時，櫃台需填寫掛號表單。

    (圖一)先輸病患身分證字號並查詢
    ![](https://i.imgur.com/QBSTXoa.png)

    (圖二)查詢後會顯示病患基本資料，並選擇看診科別、日期、時段
    ![](https://i.imgur.com/yOzvAWW.png)

4. 候診看板: 顯示目前候診病患資料 
![](https://i.imgur.com/uqHtOZc.png)

5. 看診完成: 店選完成診療後，資料會從候診看板移除
![](https://i.imgur.com/ErdbuhR.png)

6. 掛號統計: 顯示掛號科別的Pie Chart圖型，顯示各科門診掛號人數統計與百分比
![](https://i.imgur.com/aAjtxrd.png)

