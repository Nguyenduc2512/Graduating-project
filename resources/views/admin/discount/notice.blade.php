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
            Old Fashioned Recipe For Preventing Allergies And Chemical
            <div class="title-icons">

            </div>
          </div>
          <div class="message-from">
            Hello Malikan!
            <h5>Mã giảm giá:{{$namePromo}}</h5>
            <h5>Giá trị:{{$nameDown}}%</h5>
            <h5>Giá trị mã giảm giá:{{$nameStart}} - {{$nameEnd}}</h5>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, voluptas pariatur repellat
              veritatis atque, tempora quasi quas facere impedit aliquam libero qui iure cumque incidunt
              facilis soluta necessitatibus laboriosam nemo. Delectus architecto
              sed, excepturi natus iste vel quidem officia corrupti repudiandae!</p>
            
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, deleniti eaque eligendi
              minus maxime tempora eiusi.</p>
            <p>Have a nice day</p>
            <p>Ashraf</p>
          </div>
          <div class="attachment-last">
            <img src="https://media.mysport.lv/wysiwyg/Brendu_kategoriju_content_LV/adidas_apavi-baneris.jpg" width="1200px">
          </div>
        </div>
      </div>
    </div>
</body>

</html>