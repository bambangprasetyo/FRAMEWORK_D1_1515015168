[33mcommit 80f6ee8d7ec5a2973c9cce0781c00ba12b34f27a[m
Author: bambangprasetyo <bambangprasetyo>
Date:   Sun Apr 2 12:30:07 2017 +0700

    FRAMEWORK_D1_1515015168_212101-master

[1mdiff --git a/.env.example b/.env.example[m
[1mnew file mode 100644[m
[1mindex 0000000..9a9d0dc[m
[1m--- /dev/null[m
[1m+++ b/.env.example[m
[36m@@ -0,0 +1,26 @@[m
[32m+[m[32mAPP_ENV=local[m
[32m+[m[32mAPP_DEBUG=true[m
[32m+[m[32mAPP_KEY=SomeRandomString[m
[32m+[m[32mAPP_URL=http://localhost[m
[32m+[m
[32m+[m[32mDB_CONNECTION=mysql[m
[32m+[m[32mDB_HOST=127.0.0.1[m
[32m+[m[32mDB_PORT=3306[m
[32m+[m[32mDB_DATABASE=homestead[m
[32m+[m[32mDB_USERNAME=homestead[m
[32m+[m[32mDB_PASSWORD=secret[m
[32m+[m
[32m+[m[32mCACHE_DRIVER=file[m
[32m+[m[32mSESSION_DRIVER=file[m
[32m+[m[32mQUEUE_DRIVER=sync[m
[32m+[m
[32m+[m[32mREDIS_HOST=127.0.0.1[m
[32m+[m[32mREDIS_PASSWORD=null[m
[32m+[m[32mREDIS_PORT=6379[m
[32m+[m
[32m+[m[32mMAIL_DRIVER=smtp[m
[32m+[m[32mMAIL_HOST=mailtrap.io[m
[32m+[m[32mMAIL_PORT=2525[m
[32m+[m[32mMAIL_USERNAME=null[m
[32m+[m[32mMAIL_PASSWORD=null[m
[32m+[m[32mMAIL_ENCRYPTION=null[m
[1mdiff --git a/.gitattributes b/.gitattributes[m
[1mnew file mode 100644[m
[1mindex 0000000..a8763f8[m
[1m--- /dev/null[m
[1m+++ b/.gitattributes[m
[36m@@ -0,0 +1,3 @@[m
[32m+[m[32m* text=auto[m
[32m+[m[32m*.css linguist-vendored[m
[32m+[m[32m*.scss linguist-vendored[m
[1mdiff --git a/.gitignore b/.gitignore[m
[1mnew file mode 100644[m
[1mindex 0000000..6b3af3f[m
[1m--- /dev/null[m
[1m+++ b/.gitignore[m
[36m@@ -0,0 +1,6 @@[m
[32m+[m[32m/vendor[m
[32m+[m[32m/node_modules[m
[32m+[m[32m/public/storage[m
[32m+[m[32mHomestead.yaml[m
[32m+[m[32mHomestead.json[m
[32m+[m[32m.env[m
[1mdiff --git a/FRAMEWORK_D1_1515015168_212101 b/FRAMEWORK_D1_1515015168_212101[m
[1mnew file mode 160000[m
[1mindex 0000000..d682e2b[m
[1m--- /dev/null[m
[1m+++ b/FRAMEWORK_D1_1515015168_212101[m
[36m@@ -0,0 +1 @@[m
[32m+[m[32mSubproject commit d682e2b8bd93f38036f74859df4954e3e4ff332b[m
[1mdiff --git a/app/Console/Commands/Inspire.php b/app/Console/Commands/Inspire.php[m
[1mnew file mode 100644[m
[1mindex 0000000..db9ab85[m
[1m--- /dev/null[m
[1m+++ b/app/Console/Commands/Inspire.php[m
[36m@@ -0,0 +1,33 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32mnamespace App\Console\Commands;[m
[32m+[m
[32m+[m[32muse Illuminate\Console\Command;[m
[32m+[m[32muse Illuminate\Foundation\Inspiring;[m
[32m+[m
[32m+[m[32mclass Inspire extends Command[m
[32m+[m[32m{[m
[32m+[m[32m    /**[m
[32m+[m[32m     * The name and signature of the console command.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @var string[m
[32m+[m[32m     */[m
[32m+[m[32m    protected $signature = 'inspire';[m
[32m+[m
[32m+[m[32m    /**[m
[32m+[m[32m     * The console command description.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @var string[m
[32m+[m[32m     */[m
[32m+[m[32m    protected $description = 'Display an inspiring quote';[m
[32m+[m
[32m+[m[32m    /**[m
[32m+[m[32m     * Execute the console command.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @return mixed[m
[32m+[m[32m     */[m
[32m+[m[32m    public function handle()[m
[32m+[m[32m    {[m
[32m+[m[32m        $this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);[m
[32m+[m[32m    }[m
[32m+[m[32m}[m
[1mdiff --git a/app/Console/Kernel.php b/app/Console/Kernel.php[m
[1mnew file mode 100644[m
[1mindex 0000000..71c519d[m
[1m--- /dev/null[m
[1m+++ b/app/Console/Kernel.php[m
[36m@@ -0,0 +1,30 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32mnamespace App\Console;[m
[32m+[m
[32m+[m[32muse Illuminate\Console\Scheduling\Schedule;[m
[32m+[m[32muse Illuminate\Foundation\Console\Kernel as ConsoleKernel;[m
[32m+[m
[32m+[m[32mclass Kernel extends ConsoleKernel[m
[32m+[m[32m{[m
[32m+[m[32m    /**[m
[32m+[m[32m     * The Artisan commands provided by your application.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @var array[m
[32m+[m[32m     */[m
[32m+[m[32m    protected $commands = [[m
[32m+[m[32m        // Commands\Inspire::class,[m
[32m+[m[32m    ];[m
[32m+[m
[32m+[m[32m    /**[m
[32m+[m[32m     * Define the application's command schedule.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule[m
[32m+[m[32m     * @return void[m
[32m+[m[32m     */[m
[32m+[m[32m    protected function schedule(Schedule $schedule)[m
[32m+[m[32m    {[m
[32m+[m[32m        // $schedule->command('inspire')[m
[32m+[m[32m        //          ->hourly();[m
[32m+[m[32m    }[m
[32m+[m[32m}[m
[1mdiff --git a/app/Dosen.php b/app/Dosen.php[m
[1mnew file mode 100644[m
[1mindex 0000000..6a415dd[m
[1m--- /dev/null[m
[1m+++ b/app/Dosen.php[m
[36m@@ -0,0 +1,11 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32mnamespace App;[m
[32m+[m
[32m+[m[32muse Illuminate\Database\Eloquent\Model;[m
[32m+[m
[32m+[m[32mclass Dosen extends Model[m
[32m+[m[32m{[m
[32m+[m[32m    protected $table = 'Dosen';[m
[32m+[m[32m    protected $fillable = ['id','nama','nip','alamat','pengguna_id','created_at','updated_at'];[m
[32m+[m[32m}[m
[1mdiff --git a/app/Dosen_Matakuliyah.php b/app/Dosen_Matakuliyah.php[m
[1mnew file mode 100644[m
[1mindex 0000000..24c17cd[m
[1m--- /dev/null[m
[1m+++ b/app/Dosen_Matakuliyah.php[m
[36m@@ -0,0 +1,11 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32mnamespace App;[m
[32m+[m
[32m+[m[32muse Illuminate\Database\Eloquent\Model;[m
[32m+[m
[32m+[m[32mclass Dosen_Matakuliyah extends Model[m
[32m+[m[32m{[m
[32m+[m[32m    protected $table = 'Dosen_Matakuliyah';[m
[32m+[m[32m    protected $fillable = ['id','dosen_id','matakuliyah_id','created_at','updated_at'];[m
[32m+[m[32m}[m
\ No newline at end of file[m
[1mdiff --git a/app/Events/Event.php b/app/Events/Event.php[m
[1mnew file mode 100644[m
[1mindex 0000000..ba2f888[m
[1m--- /dev/null[m
[1m+++ b/app/Events/Event.php[m
[36m@@ -0,0 +1,8 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32mnamespace App\Events;[m
[32m+[m
[32m+[m[32mabstract class Event[m
[32m+[m[32m{[m
[32m+[m[32m    //[m
[32m+[m[32m}[m
[1mdiff --git a/app/Exceptions/Handler.php b/app/Exceptions/Handler.php[m
[1mnew file mode 100644[m
[1mindex 0000000..53617ef[m
[1m--- /dev/null[m
[1m+++ b/app/Exceptions/Handler.php[m
[36m@@ -0,0 +1,50 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32mnamespace App\Exceptions;[m
[32m+[m
[32m+[m[32muse Exception;[m
[32m+[m[32muse Illuminate\Validation\ValidationException;[m
[32m+[m[32muse Illuminate\Auth\Access\AuthorizationException;[m
[32m+[m[32muse Illuminate\Database\Eloquent\ModelNotFoundException;[m
[32m+[m[32muse Symfony\Component\HttpKernel\Exception\HttpException;[m
[32m+[m[32muse Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;[m
[32m+[m
[32m+[m[32mclass Handler extends ExceptionHandler[m
[32m+[m[32m{[m
[32m+[m[32m    /**[m
[32m+[m[32m     * A list of the exception types that should not be reported.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @var array[m
[32m+[m[32m     */[m
[32m+[m[32m    protected $dontReport = [[m
[32m+[m[32m        AuthorizationException::class,[m
[32m+[m[32m        HttpException::class,[m
[32m+[m[32m        ModelNotFoundException::class,[m
[32m+[m[32m        ValidationException::class,[m
[32m+[m[32m    ];[m
[32m+[m
[32m+[m[32m    /**[m
[32m+[m[32m     * Report or log an exception.[m
[32m+[m[32m     *[m
[32m+[m[32m     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @param  \Exception  $e[m
[32m+[m[32m     * @return void[m
[32m+[m[32m     */[m
[32m+[m[32m    public function report(Exception $e)[m
[32m+[m[32m    {[m
[32m+[m[32m        parent::report($e);[m
[32m+[m[32m    }[m
[32m+[m
[32m+[m[32m 