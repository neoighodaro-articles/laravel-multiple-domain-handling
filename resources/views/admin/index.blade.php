<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="alert alert-success" role="alert" v-show="success" style="display: none">
              Post added successfully.
            </div>
            <form action="" class="" v-on:submit.prevent="savePost">
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" v-model="title">
                </div>
                <div class="form-group">
                    <label for="title">Post Content</label>
                    <textarea type="text" class="form-control" v-model="content"></textarea>
                </div>
                <input type="submit" value="Save Post" class="btn btn-primary">
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script>
    new Vue({
        el: '#app',
        data: {
            title: "",
            content: "",
            success: false,
        },
        methods: {
            savePost: function () {
                axios.post('http://api.acme.test/posts', {title: this.title, content: this.content}).then(res => {
                    this.success = true
                    this.title = this.content = ''
                    window.setTimeout(() => this.success = false, 3000)
                })
            }
        }
    })
    </script>
</body>
</html>
