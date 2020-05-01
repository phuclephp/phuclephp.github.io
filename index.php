<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sự kiện với v-on Vuejs - Allaravel.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
    .header_flex{
        display:   flex;
        background:#f00;
        padding:4px;   
        height:300px
    }
    .header_flex_content{
        display:   flex-basis;
        background:#0f0;
        padding:4px;
        margin:4px;
        flex-grow:4;
        align-self: flex-end;
        align-items: center;
        flex-shrink:2
    }
    </style>
</head>
<body>
    <div class="container" id="app">
        <div class="row">
            <div class="col-md-12">
                <h1>Quản lý sự kiện dễ dàng với v-on Vue.js</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    Một website hấp dẫn người xem phải có giao diện đẹp và có sự tương tác qua lại. Bạn hãy tưởng tượng một cô gái xinh đẹp nhưng hỏi gì cũng không biết, chạm vào không có phản ứng thì không gây cảm hứng cho người đối diện. Như vậy, tương tác là một yếu tố rất quan trọng, khéo léo bố trí các tương tác bạn vừa có thể khai thác được thông tin người dùng tối đa, vừa giúp cho họ tìm được những thông tin phù hợp, giữ người dùng ở lại với website lâu hơn và đồng nghĩa với lợi nhuận cao hơn.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-outline-primary" v-on:click="likes++">
                    <i class="far fa-thumbs-up"></i> Thích <span class="badge badge-pill badge-primary">{{ likes }}</span>
                </button>
                
            </div>
        </div>
        <div class="header_flex">
            <div  class="header_flex_content">1<br>2<br>2<br>2</div>
            <div  class="header_flex_content">2</div>
            <div  class="header_flex_content">3</div>
        </div>


    </div>
    <script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>
    <script type="text/javascript">
        new Vue({
            el: '#app',
            data: {
                likes: 9
            }
        })
    </script>
</body>
</html>