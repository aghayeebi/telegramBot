<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}"/>
    <!-- Javascript Assets -->
    <script src="{{asset('/assets/js/app.js')}}" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bot Manager</title>
</head>
<body>
<div class="flex flex-col h-screen justify-center items-center">
    <div class="bg-white p-8 shadow-md rounded-lg">

        <h1 class="text-2xl font-bold mb-4">Bot manager</h1>
        <div class="">

        </div>

        <form method="post" action="/send-message">
            @csrf
            <input type="text" value="sendMessage" name='method' class="hidden">
            <label class="block">
                <input
                    name="chat_id"
                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="chat id"
                    type="text"
                />
            </label>

            <label class="block mt-4">
                <textarea
                    rows="4"
                    name="message"
                    placeholder=" Enter Text"
                    class="form-textarea w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                ></textarea>
            </label>

            <button
                class="btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                Send
            </button>
        </form>



    </div>



</div>

</body>
</html>
