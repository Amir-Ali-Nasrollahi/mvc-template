<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه ورود اطلاعات دستگاه کارتخوان</title>
    <link rel="stylesheet" href="<?php echo URL.'public/style.css' ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body dir="rtl">
    <section class="grid grid-cols-4 bg-slate-200 w-full h-screen">
        
        <div class="md:col-span-2 col-span-4 flex flex-col items-center justify-around w-full">
            <div class="flex flex-col items-center">
                <h1 class="text-center text-3xl ">سامانه ثبت اطلاعات دستگاه کارتخوان</h1>
                <div class="w-32 bg-slate-300/50 mt-5 md:hidden block flex flex-row items-center justify-around rounded-md h-8">
                    <button class="w-full h-full">آموزش</button>
                    <button class="rounded-r-lg h-full rounded-l-md bg-amber-400 w-full">ثبت نام</button>
                    d
                </div>
            </div>
            <form action="<?php echo URL.'Home/insert' ?>" method="POST" class="flex flex-col items-center w-5/6 bg-slate-300/30 py-2 rounded-lg">
                <h1 class="text-2xl mt-2">فرم ثبت اطلاعات</h1>
                <h3 class="bg-rose-500/10 text-rose-900 rounded-lg px-2 py-1 border border-rose-900 mx-2">جهت جلوگیری از قطع دستگاه کارتخوان لطفا مشخصات دستگاه خود را در فرم زیر وارد کنید .</h3>

                <div class="w-5/6 mt-5">
                    <label for="t1">نام نمایندگی</label>
                    <input name="name" id="t1" type="text" class="w-full px-2 bg-slate-50 rounded-lg h-10 mt-1">
                </div>
                <div class="w-5/6 mt-3">
                    <label for="t2">شماره سریال</label>
                    <input name="serial" id="t2" type="text" class="w-full px-2 bg-slate-50 rounded-lg h-10 mt-1">
                </div>
                <div class="w-5/6 mt-3">
                    <label for="t3">کد IMEI</label>
                    <input name="imei" id="t3" type="text" class="w-full px-2 bg-slate-50 rounded-lg h-10 mt-1">
                </div>
                <div class="w-5/6 mt-3">
                    <label for="t4">شماره SIM/APN</label>
                    <input name="sim" id="t4" type="text" class="w-full px-2 bg-slate-50 rounded-lg h-10 mt-1">
                </div>
                <input type="submit" class="cursor-pointer mt-2 h-10 text-lg bg-rose-500 w-5/6 rounded-lg shadow-lg shadow-rose-400/20 text-white" value="تایید">
            </form>
        </div>


        <div class="md:col-span-2 col-span-4 md:block hidden overflow-y-scroll flex flex-col items-center">
            <div class="bg-amber-400/60 px-2 py-1 rounded-lg mt-3 w-11/12 border border-amber-400 ">
                    <h1 class="text-lg font-bold text-amber-800">نکته !</h1>
                    <h3 class="text-base text-amber-800 ">اگر نمیدانید چگونه کد IMEI دستگاه را پیدا کنید ، از این قسمت اموزش ببینید .</h3>
            </div>
        </div>
    </section>
</body>
</html>