<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>
<style type="text/css">
  * {
    box-sizing: border-box;
    outline: none;
  }

  body {
    margin: 0;
    font-family: Sans-serif;
    overflow: hidden;
  }

  .dashboard {
    height: 100vh;
    display: flex;
  }
  .sidebar {
    width: 80px;
    height: 100%;
    background-image: linear-gradient(-225deg,
        #5271c4 0%,
        #b19fff 48%,
        #eca1fe 100%);
    display: flex;
  }
  .wrapper {
    padding: 0 25px;
    height: 100vh;
    display: flex;
    flex-direction: column;
  }
  .right-side {
    background-color: #f2f3f7;
    width: 100%;
    padding: 8px 30px;
    display: flex;
    flex-direction: column;
  }

  .right-body {
    flex: 1;
    display: flex;
    overflow: hidden;
  }

  .date {
    color: grey;
  }

  .person {
    width: 25px;
    height: 25px;
    border-radius: 10px;
    text-align: center;
    color: white;
    padding: 5px 3px 0px;
  }

  .border1 {
    background-color: #5f4bfd;
  }

  .border2 {
    background-color: #e32553;
  }

  .border3 {
    background-color: #01c828;
  }

  .message {
    margin: 20px 10px;
    flex: 1;
    background-color: white;
    padding: 25px;
    overflow: auto;
  }

  .mes-date {
    color: grey;
    font-size: 14px;
  }

  .who {
    font-weight: 600;
  }

  .title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 10px;
  }

  .message-from {
    margin-top: 20px;
    color: grey;
    font-size: 17px;
  }

  .attachment-last {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 350px;
  }

  .att-write {
    color: grey;
  }
</style>

<body>
  <div class="dashboard">
    <div class="right-side">
      <div class="right-body">
        <div class="message">
          <div class="title">
            AUTHSHOES xin gửi tới bạn chương trình mã giảm giá rất hấp dẫn diễn ra vào {{$nameStart}} - {{$nameEnd}}  trên AUTHSHOES
            <div class="title-icons">
            </div>
          </div>
          <div class="message-from">
            Chào bạn!
            <h3>Mã giảm giá:{{$namePromo}}</h3>
            <h3>Giá trị:{{$nameDown}}%</h3>
            <h5>Giá trị mã giảm giá:{{$nameStart}} - {{$nameEnd}}</h5>
            <p>- Nhân Ngày nhà giáo Việt Nam, với tất cả tấm chân tình mà con muốn gởi đến thầy cô, chúc cho tất cả thầy cô luôn vui vẻ tràn ngập niềm tin trong cuộc sống, ngày nào cũng luôn gặp may mắn, và thành công trên con đường dạy học của mình.</p>
            <p>Tưng bừng chào mùng ngày nhà giáo việt nam 20 - 11 chúng tôi gửi bạn mã giảm giá.</p>
            <p>Chúc quý khách một ngày tốt đẹp.</p>
            <p>AUTHSHOES</p>
          </div>
          <div class="attachment-last">
            <img src="https://media.mysport.lv/wysiwyg/Brendu_kategoriju_content_LV/adidas_apavi-baneris.jpg" width="1200px">
          </div>
        </div>
      </div>
    </div>
</body>

</html>