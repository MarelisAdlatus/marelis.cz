<h3 id="usage" class="border-bottom border-secondary border-1">Používání</h3>
<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<div class="highlight-code mb-3" lang="java" theme="github-light">
public class UploadWorker extends Worker {
    public UploadWorker(
        @NonNull Context context,
        @NonNull WorkerParameters params) {
        super(context, params);
    }

    @Override
    public Result doWork() {

        // Do the work here--in this case, upload the images.
        uploadImages();

        // Indicate whether the work finished successfully with the Result
        return Result.success();
    }
}
</div>

<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<div class="highlight-code" lang="kotlin" theme="github-dark">
class UploadWorker(appContext: Context, workerParams: WorkerParameters):
        Worker(appContext, workerParams) {
    override fun doWork(): Result {

        // Do the work here--in this case, upload the images.
        uploadImages()

        // Indicate whether the work finished successfully with the Result
        return Result.success()
    }
}
</div>

<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<div class="container">
    <div class="row justify-content-center mb-2">
        <div class="mermaid-diagram" path="{{ asset('storage/content/software/software-1/v1/usage-diagram.cs.mmd') }}" style="width: 95%"></div>
    </div>
</div>

<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<div class="highlight-code" lang="bash" theme="dracula">
#!/bin/bash
# Declare a variable
AGE=20

# Use a conditional statement
if [ $AGE -gt 18 ]
then
    echo 'You are old enough to vote'
else
    echo 'You are not old enough to vote'
fi

# Output:
# 'You are old enough to vote'
</div>

<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<div class="p-3 bg-success bg-opacity-10 border-start border-success border-4 fs-5 mb-4">
    Můžete provést následující
</div>

<div class="clearfix">
    <svg class="col-md-4 float-md-start ms-md-3 me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 240" width="320" height="240">
        <rect width="320" height="240" fill="#cccccc"></rect>
        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="28px" fill="#333333">Obrázek</text>   
    </svg>
    <p class="fs-5">Jak můžete vidět, odstavce ladně obtékají plovoucí obrázek. Nyní si představte, jak by to vypadalo s nějakým skutečným obsahem, spíše než s tímto nudným zástupným textem, který pokračuje dál a dál, ale ve skutečnosti neposkytuje žádné hmatatelné informace. Jednoduše zabírá místo a opravdu by se to nemělo číst.</p>
    <p class="fs-5">A přesto jste tady, stále vytrvale čtete tento zástupný text a doufáte v nějaké další poznatky nebo nějaké skryté easter egg obsahu. Možná vtip. Nic z toho tady bohužel není.</p>
    <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
</div>

<div class="p-3 bg-danger bg-opacity-10 border-start border-danger border-4 mb-4">
    <div class="position-relative fs-5">
        Varování před maličkostí
        <span class="position-absolute top-50 end-0 translate-middle-y pe-2">
            <i class="bi bi-exclamation-square text-danger fs-2"></i>
        </span>
    </div>
</div>

<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<div class="clearfix">
    <svg class="col-md-4 float-md-end ms-md-3 me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 240" width="320" height="240">
        <rect width="320" height="240" fill="#cccccc"></rect>
        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="28px" fill="#333333">Obrázek</text>   
    </svg>
    <p class="fs-5">Jak můžete vidět, odstavce ladně obtékají plovoucí obrázek. Nyní si představte, jak by to vypadalo s nějakým skutečným obsahem, spíše než s tímto nudným zástupným textem, který pokračuje dál a dál, ale ve skutečnosti neposkytuje žádné hmatatelné informace. Jednoduše zabírá místo a opravdu by se to nemělo číst.</p>
    <p class="fs-5">A přesto jste tady, stále vytrvale čtete tento zástupný text a doufáte v nějaké další poznatky nebo nějaké skryté easter egg obsahu. Možná vtip. Nic z toho tady bohužel není.</p>
    <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
</div>

<div class="p-3 bg-info bg-opacity-10 border-start border-info border-4 mb-4">
    <div class="position-relative fs-5">
        Další možnosti a doporučení
        <span class="position-absolute top-50 end-0 translate-middle-y">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-list text-dark fs-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Akce</a></li>
                    <li><a class="dropdown-item" href="#">Další akce</a></li>
                    <li><a class="dropdown-item" href="#">Tady je něco jiného</a></li>
                </ul>
            </div>
        </span>
    </div>
</div>

<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<div class="text-center">
    <figure class="figure">
        <svg class="figure-img img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" width="640" height="480">
            <rect width="640" height="480" fill="#cccccc"></rect>
            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="32px" fill="#333333">Obrázek</text>   
        </svg>
        <figcaption class="figure-caption fs-6 text-start ms-1">Popisek k obrázku výše</figcaption>
    </figure>
</div>

<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
