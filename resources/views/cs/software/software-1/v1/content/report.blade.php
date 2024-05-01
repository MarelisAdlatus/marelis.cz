<h3 id="report" class="border-bottom border-secondary border-1">Report</h3>
<p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
<div class="container">
    <form class="row d-flex justify-content-center g-3 mb-3" method="POST" id="report-form" autocomplete="on" lang="cs">
        @csrf
        <input type="hidden" id="group" name="group" value="software">
        <input type="hidden" id="item" name="item" value="software-1">
        <div class="col-md-5">
            <label for="input-name" class="form-label">Jméno</label>
            <input type="text" class="form-control" id="input-name" name="name" autocomplete="name">
            <span class="text-danger" role="alert"><strong id="error-name"></strong></span>
        </div>
        <div class="col-md-5">
            <label for="input-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="input-email" name="email" autocomplete="email" required>
            <span class="text-danger" role="alert"><strong id="error-email"></strong></span>
        </div>
        <div class="col-10">
            <label for="input-option" class="form-label">Vyberte téma zprávy</label>
            <select class="form-select" id="input-option" name="option" required>
                <option selected disabled value="">Vybrat...</option>
                <option value="report-bug">V softwaru byla nalezena chyba</option>
                <option value="report-problem">Problémy s aplikací</option>
                <option value="report-feature">Nová funkce softwaru</option>
                <option value="report-other">Něco jiného</option>
            </select>
        </div>
        <div class="col-10">
            <div class="mb-2">Zpráva</div>
            <div id="input-message-border">
                <div class="wysiwyg-editor" id="input-message" lang="cs"></div>
            </div>
            <span class="text-danger" role="alert"><strong id="error-message"></strong></span>
        </div>
        <div class="col-10 d-flex justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check-send-copy" name="check-send-copy" checked>
                <label class="form-check-label" for="check-send-copy">
                    Pošlete mi kopii této zprávy
                </label>
            </div>
        </div>
        <div class="col-10 d-flex justify-content-center">
            <button class="btn btn-primary" type="submit">Odeslat zprávu</button>
        </div>
    </form>
</div>
