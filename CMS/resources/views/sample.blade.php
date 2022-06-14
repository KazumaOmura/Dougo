<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" media="all" href="{{ asset('css/bootstrap.css') }}">

    <title>Document</title>
</head>

<body>
@include('layouts.header')
{{ Breadcrumbs::render('admin.user.index') }}
<main class="container-xxl">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td><button type="button" class="btn btn-primary">Primary</button></td>
        </tr>
        </tbody>
    </table>



    <div id="app">
        <!-- ③ 変数の中身を表示 -->
        <span v-text="string"></span>
        <span v-text="number"></span>
        <span v-text="boolean"></span>
        <span v-text="array"></span>
        <span v-text="object"></span>
    </div>
{{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>--}}
{{--    <script src="https://unpkg.com/vue@3.0.2/dist/vue.global.prod.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script>

        Vue.createApp({
            data() {
                return {
                    string: '',
                    number: 0,
                    boolean: false,
                    array: [],
                    object: {}
                }
            },
            methods: {
                getJsonData() { // ② AjaxでJSONを取得

                    const url = '{{ route('sample') }}'; // ここでもLaravelと連携
                    axios.get(url)
                        .then(response => {

                            this.string = response.data.string;
                            this.number = response.data.number;
                            this.boolean = response.data.boolean;
                            this.array = response.data.array;
                            this.object = response.data.object;

                        });

                }
            },
            mounted() {

                this.getJsonData(); // ① データ取得メソッドを実行

            }
        }).mount('#app');

    </script>

</main>
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</html>
