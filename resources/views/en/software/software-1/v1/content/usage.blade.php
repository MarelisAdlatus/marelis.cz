<h3 id="usage" class="border-bottom border-secondary border-1">Usage</h3>
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
    You can do the following
</div>

<div class="clearfix">
    <svg class="col-md-4 float-md-start ms-md-3 me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 240" width="320" height="240">
        <rect width="320" height="240" fill="#cccccc"></rect>
        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="28px" fill="#333333">Image</text>   
    </svg>
    <p class="fs-5">As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.</p>
    <p class="fs-5">And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.</p>
    <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
</div>

<div class="p-3 bg-danger bg-opacity-10 border-start border-danger border-4 mb-4">
    <div class="position-relative fs-5">
        A warning about a little thing
        <span class="position-absolute top-50 end-0 translate-middle-y pe-2">
            <i class="bi bi-exclamation-square text-danger fs-2"></i>
        </span>
    </div>
</div>

<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<div class="clearfix">
    <svg class="col-md-4 float-md-end ms-md-3 me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 240" width="320" height="240">
        <rect width="320" height="240" fill="#cccccc"></rect>
        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="28px" fill="#333333">Image</text>   
    </svg>
    <p class="fs-5">As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.</p>
    <p class="fs-5">And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.</p>
    <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
</div>

<div class="p-3 bg-info bg-opacity-10 border-start border-info border-4 mb-4">
    <div class="position-relative fs-5">
        Other options and recommendations
        <span class="position-absolute top-50 end-0 translate-middle-y">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-list text-dark fs-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
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
            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="32px" fill="#333333">Image</text>   
        </svg>
        <figcaption class="figure-caption fs-6 text-start ms-1">A caption for the above image</figcaption>
    </figure>
</div>

<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
