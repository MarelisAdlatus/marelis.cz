@extends('layouts.app')

@section('navbar.items')
<li class="nav-item">
    <a class="nav-link active-link fs-5" href="#software">Software</a>
</li>
<li class="nav-item">
    <a class="nav-link active-link fs-5" href="#models">Models</a>
</li>
<li class="nav-item">
    <a class="nav-link active-link fs-5" href="#projects">Projects</a>
</li>
<li class="nav-item">
    <a class="nav-link active-link fs-5" href="#contact">Contact</a>
</li>
@endsection

@section('content')

<svg xmlns="http://www.w3.org/2000/svg" style="display:none;"> 
    <symbol id="fake-photo" viewBox="0 0 100 100">
        <rect width="100" height="100" fill="#cccccc"></rect>
        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="24px" fill="#333333">Photo</text>   
    </symbol>
</svg>

<div class="container mt-4">
    <div class="row">
        <!-- About me -->
        <div class="col-sm-3">
            <h3>About Me</h3>
            <h5>Photo of me:</h5>
            <div class="float-start me-4 mt-2">
                <svg style="width: 100px; height: 100px;"><use href="#fake-photo"/></svg>
            </div>
            <p class="fs-5 mt-0">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <h3 class="mt-2">Some Links</h3>
            <p class="fs-5">Lorem ipsum dolor sit ame.</p>
            <div style="font-size: 34px;">
                <a class="external-link" id="github-link" name="GitHub" href="https://github.com" data-bs-toggle="tooltip" title="GitHub"><i class="bi bi-github" style="color: #000000;"></i></a>
                <a class="external-link" id="youtube-link" name="YouTube" href="https://www.youtube.com" data-bs-toggle="tooltip" title="YouTube"><i class="bi bi-youtube" style="color: #dc3545;"></i></a>
                <a class="external-link" id="discord-link" name="Discord" href="https://discord.com" data-bs-toggle="tooltip" title="Discord"><i class="bi bi-discord" style="color: #5865f2;"></i></a>
                <a class="external-link" id="steam-link" name="Steam" href="https://steamcommunity.com" data-bs-toggle="tooltip" title="Steam"><i class="bi bi-steam" style="color: #000000;"></i></a>
                <a class="external-link" id="facebook-link" name="Facebook" href="https://www.facebook.com" data-bs-toggle="tooltip" title="Facebook"><i class="bi bi-facebook" style="color: #0165e1;"></i></a>
            </div>
            <h3 class="mt-2">Contribute</h3>
            <p class="fs-5">Lorem ipsum dolor sit ame.</p>
            <a class="external-link text-decoration-none" id="paypal-link" name="PayPal" href="https://www.paypal.com" data-bs-toggle="tooltip" title="PayPal">
                <img width="88" height="60" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IS0tIFVwbG9hZGVkIHRvOiBTVkcgUmVwbywgd3d3LnN2Z3JlcG8uY29tLCBHZW5lcmF0b3I6IFNWRyBSZXBvIE1peGVyIFRvb2xzIC0tPgo8c3ZnIHdpZHRoPSI4MDBweCIgaGVpZ2h0PSI4MDBweCIgdmlld0JveD0iMCAtMTQwIDc4MCA3ODAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDc4MCA1MDAiIHZlcnNpb249IjEuMSIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iNzgwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI0ZGRiIvPjxwYXRoIGQ9Im0xNjguMzggMTY5Ljg1Yy04LjM5OS01Ljc3NC0xOS4zNTktOC42NjgtMzIuODgtOC42NjhoLTUyLjM0NmMtNC4xNDUgMC02LjQzNSAyLjA3My02Ljg3IDYuMjE0bC0yMS4yNjUgMTMzLjQ4Yy0wLjIyMSAxLjMxMSAwLjEwNyAyLjUxIDAuOTgxIDMuNiAwLjg2OSAxLjA5MyAxLjk2MiAxLjYzNiAzLjI3MSAxLjYzNmgyNC44NjRjNC4zNjEgMCA2Ljc1OC0yLjA2OCA3LjE5OC02LjIxNmw1Ljg4OC0zNS45ODVjMC4yMTUtMS43NDQgMC45ODItMy4xNjIgMi4yOTEtNC4yNTQgMS4zMDgtMS4wOSAyLjk0NC0xLjgwNCA0LjkwNy0yLjEzIDEuOTYzLTAuMzI0IDMuODE0LTAuNDg3IDUuNTYyLTAuNDg3IDEuNzQzIDAgMy44MTQgMC4xMSA2LjIxNyAwLjMyNyAyLjM5NyAwLjIxOCAzLjkyNSAwLjMyNCA0LjU4IDAuMzI0IDE4Ljc1NiAwIDMzLjQ3OC01LjI4NSA0NC4xNjctMTUuODY2IDEwLjY4NC0xMC41NzcgMTYuMDMyLTI1LjI0NCAxNi4wMzItNDQuMDA0IDAtMTIuODY4LTQuMjAyLTIyLjE5Mi0xMi41OTctMjcuOTc1em0tMjYuOTkgNDAuMDhjLTEuMDk0IDcuNjM1LTMuOTI2IDEyLjY0OS04LjUwNiAxNS4wNDktNC41ODEgMi40MDMtMTEuMTI0IDMuNTk3LTE5LjYyOSAzLjU5N2wtMTAuNzk3IDAuMzI4IDUuNTYzLTM1LjAwN2MwLjQzNC0yLjM5NyAxLjg1MS0zLjU5NyA0LjI1Mi0zLjU5N2g2LjIxOGM4LjcyIDAgMTUuMDQ5IDEuMjU3IDE4Ljk3NSAzLjc2MSAzLjkyNCAyLjUxIDUuMjMzIDcuODAyIDMuOTI0IDE1Ljg2OXoiIGZpbGw9IiMwMDMwODciLz48cGF0aCBkPSJtNzIwLjc5IDE2MS4xOGgtMjQuMjA4Yy0yLjQwNSAwLTMuODIxIDEuMi00LjI1MyAzLjU5OWwtMjEuMjY3IDEzNi4xLTAuMzI4IDAuNjU0YzAgMS4wOTYgMC40MzcgMi4xMjcgMS4zMTEgMy4xMDkgMC44NjggMC45NzkgMS45NjMgMS40NzEgMy4yNzEgMS40NzFoMjEuNTk1YzQuMTM4IDAgNi40MjktMi4wNjggNi44NzEtNi4yMTVsMjEuMjY1LTEzMy44MXYtMC4zMjVjLTJlLTMgLTMuMDUzLTEuNDI0LTQuNTgtNC4yNTctNC41OHoiIGZpbGw9IiMwMDlDREUiLz48cGF0aCBkPSJtNDI4LjMxIDIxMy44NmMwLTEuMDg4LTAuNDM4LTIuMTI2LTEuMzA2LTMuMTA2LTAuODc1LTAuOTgxLTEuODU3LTEuNDc0LTIuOTQ1LTEuNDc0aC0yNS4xOTFjLTIuNDA0IDAtNC4zNjYgMS4wOTYtNS44OSAzLjI3MWwtMzQuNjc5IDUxLjA0LTE0LjM5NC00OS4wNzVjLTEuMDk2LTMuNDg4LTMuNDkzLTUuMjM2LTcuMTk4LTUuMjM2aC0yNC41NGMtMS4wOTMgMC0yLjA3NSAwLjQ5Mi0yLjk0MiAxLjQ3NC0wLjg3NSAwLjk4LTEuMzA5IDIuMDE5LTEuMzA5IDMuMTA2IDAgMC40NCAyLjEyNyA2Ljg3MSA2LjM3OSAxOS4zMDMgNC4yNTIgMTIuNDM0IDguODMzIDI1Ljg0OCAxMy43NDEgNDAuMjQ0IDQuOTA4IDE0LjM5NCA3LjQ2OCAyMi4wMzEgNy42ODggMjIuODk4LTE3Ljg4NiAyNC40My0yNi44MjYgMzcuNTE4LTI2LjgyNiAzOS4yNiAwIDIuODM4IDEuNDE3IDQuMjU0IDQuMjUzIDQuMjU0aDI1LjE5MWMyLjM5OSAwIDQuMzYxLTEuMDg4IDUuODktMy4yNzFsODMuNDI3LTEyMC40YzAuNDMzLTAuNDMzIDAuNjUxLTEuMTkzIDAuNjUxLTIuMjg5eiIgZmlsbD0iIzAwMzA4NyIvPjxwYXRoIGQ9Im02NjIuODkgMjA5LjI4aC0yNC44NjVjLTMuMDU2IDAtNC45MDQgMy41OTktNS41NTkgMTAuNzk3LTUuNjc3LTguNzItMTYuMDMxLTEzLjA4OC0zMS4wODMtMTMuMDg4LTE1LjcwNCAwLTI5LjA2NSA1Ljg5LTQwLjA3NyAxNy42NjgtMTEuMDE2IDExLjc3OS0xNi41MjEgMjUuNjMxLTE2LjUyMSA0MS41NTEgMCAxMi44NzEgMy43NjEgMjMuMTIxIDExLjI4NSAzMC43NTIgNy41MjQgNy42MzkgMTcuNjExIDExLjQ1MSAzMC4yNjYgMTEuNDUxIDYuMzIzIDAgMTIuNzU3LTEuMzExIDE5LjMtMy45MjYgNi41NDQtMi42MTcgMTEuNjY1LTYuMTA1IDE1LjM3OS0xMC40NjkgMCAwLjIxOS0wLjIyMiAxLjE5OC0wLjY1NCAyLjk0Mi0wLjQ0IDEuNzQ4LTAuNjU1IDMuMDYtMC42NTUgMy45MjYgMCAzLjQ5NCAxLjQxNCA1LjIzNCA0LjI1NCA1LjIzNGgyMi41NzZjNC4xMzggMCA2LjU0MS0yLjA2OCA3LjE5My02LjIxNmwxMy40MTUtODUuMzg5YzAuMjE1LTEuMzA5LTAuMTExLTIuNTA3LTAuOTgxLTMuNTk5LTAuODc2LTEuMDg3LTEuOTY0LTEuNjM0LTMuMjczLTEuNjM0em0tNDIuNjk0IDY0LjQ1MmMtNS41NjIgNS40NTMtMTIuMjY5IDguMTc5LTIwLjEyIDguMTc5LTYuMzI4IDAtMTEuNDQ5LTEuNzQyLTE1LjM3Ny01LjIzNC0zLjkyOC0zLjQ4My01Ljg5MS04LjI4Mi01Ljg5MS0xNC4zOTYgMC04LjA2NCAyLjcyNy0xNC44ODQgOC4xODEtMjAuNDQ2IDUuNDQ2LTUuNTYyIDEyLjIxNC04LjM0MyAyMC4yODQtOC4zNDMgNi4xMDIgMCAxMS4xNzQgMS44IDE1LjIxMiA1LjM5NyA0LjAzMiAzLjU5OSA2LjA1NSA4LjU2MyA2LjA1NSAxNC44ODgtMWUtMyA3Ljg1MS0yLjc4MyAxNC41MDUtOC4zNDQgMTkuOTU1eiIgZmlsbD0iIzAwOUNERSIvPjxwYXRoIGQ9Im0yOTEuMjMgMjA5LjI4aC0yNC44NjRjLTMuMDU4IDAtNC45MDggMy41OTktNS41NjMgMTAuNzk3LTUuODg5LTguNzItMTYuMjUtMTMuMDg4LTMxLjA4MS0xMy4wODgtMTUuNzA0IDAtMjkuMDY1IDUuODktNDAuMDc4IDE3LjY2OC0xMS4wMTYgMTEuNzc5LTE2LjUyMSAyNS42MzEtMTYuNTIxIDQxLjU1MSAwIDEyLjg3MSAzLjc2MyAyMy4xMjEgMTEuMjg4IDMwLjc1MiA3LjUyNSA3LjYzOSAxNy42MSAxMS40NTEgMzAuMjYyIDExLjQ1MSA2LjEwNCAwIDEyLjQzMy0xLjMxMSAxOC45NzUtMy45MjYgNi41NDMtMi42MTcgMTEuNzc4LTYuMTA1IDE1LjcwNC0xMC40NjktMC44NzUgMi42MTYtMS4zMDkgNC45MDctMS4zMDkgNi44NjggMCAzLjQ5NCAxLjQxNyA1LjIzNCA0LjI1MyA1LjIzNGgyMi41NzRjNC4xNDEgMCA2LjU0My0yLjA2OCA3LjE5OC02LjIxNmwxMy40MTMtODUuMzg5YzAuMjE1LTEuMzA5LTAuMTEyLTIuNTA3LTAuOTgxLTMuNTk5LTAuODczLTEuMDg3LTEuOTYyLTEuNjM0LTMuMjctMS42MzR6bS00Mi42OTUgNjQuNjE0Yy01LjU2MyA1LjM1MS0xMi4zODIgOC4wMTctMjAuNDQ3IDguMDE3LTYuMzI5IDAtMTEuNC0xLjc0Mi0xNS4yMTQtNS4yMzQtMy44MTktMy40ODMtNS43MjYtOC4yODItNS43MjYtMTQuMzk2IDAtOC4wNjQgMi43MjUtMTQuODg0IDguMTgtMjAuNDQ2IDUuNDQ5LTUuNTYyIDEyLjIxMS04LjM0MyAyMC4yODQtOC4zNDMgNi4xMDQgMCAxMS4xNzUgMS44IDE1LjIxNCA1LjM5OCA0LjAzMiAzLjU5OSA2LjA1MiA4LjU2MyA2LjA1MiAxNC44ODggMCA4LjA2OS0yLjc4MSAxNC43NzgtOC4zNDMgMjAuMTE2eiIgZmlsbD0iIzAwMzA4NyIvPjxwYXRoIGQ9Im01NDAuMDQgMTY5Ljg1Yy04LjM5OC01Ljc3NC0xOS4zNTYtOC42NjgtMzIuODc5LTguNjY4aC01Mi4wMmMtNC4zNjQgMC02Ljc2NSAyLjA3My03LjE5NyA2LjIxNGwtMjEuMjY2IDEzMy40OGMtMC4yMjEgMS4zMTIgMC4xMDYgMi41MTEgMC45ODEgMy42MDEgMC44NjUgMS4wOTIgMS45NjIgMS42MzUgMy4yNzEgMS42MzVoMjYuODI2YzIuNjE3IDAgNC4zNjEtMS40MTYgNS4yMzUtNC4yNTJsNS44OS0zNy45NDljMC4yMTYtMS43NDQgMC45OC0zLjE2MiAyLjI5LTQuMjU0IDEuMzA5LTEuMDkgMi45NDMtMS44MDMgNC45MDgtMi4xMyAxLjk2Mi0wLjMyNCAzLjgxMi0wLjQ4NyA1LjU2Mi0wLjQ4NyAxLjc0MyAwIDMuODE0IDAuMTEgNi4yMTQgMC4zMjcgMi4zOTkgMC4yMTggMy45MzEgMC4zMjQgNC41OCAwLjMyNCAxOC43NiAwIDMzLjQ3OS01LjI4NSA0NC4xNjgtMTUuODY2IDEwLjY4OC0xMC41NzcgMTYuMDMxLTI1LjI0NCAxNi4wMzEtNDQuMDA0IDJlLTMgLTEyLjg2Ny00LjE5OS0yMi4xOTEtMTIuNTk0LTI3Ljk3NHptLTMzLjUzNCA1My44MmMtNC43OTkgMy4yNzEtMTEuOTk3IDQuOTA2LTIxLjU5MiA0LjkwNmwtMTAuNDcgMC4zMjggNS41NjItMzUuMDA3YzAuNDMyLTIuMzk3IDEuODQ5LTMuNTk3IDQuMjUyLTMuNTk3aDUuODg3YzQuNzk4IDAgOC42MTQgMC4yMTggMTEuNDU0IDAuNjUzIDIuODMxIDAuNDQgNS41NjIgMS43OTkgOC4xNzkgNC4wODkgMi42MTggMi4yOTEgMy45MjYgNS42MTggMy45MjYgOS45OCAwIDkuMTYtMi40MDIgMTUuMzc1LTcuMTk4IDE4LjY0OHoiIGZpbGw9IiMwMDlDREUiLz48L3N2Zz4="></img>
            </a>
            <a class="external-link text-decoration-none" id="revolut-link" name="Revolut" href="https://www.revolut.com" data-bs-toggle="tooltip" title="Revolut">
                <img width="120" height="60" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAiIGhlaWdodD0iNjAiPjxnIHRyYW5zZm9ybT0ibWF0cml4KC41MjY1NjggMCAwIC41MjY1NjggMTAuMDA0Njg0IC4zNTMxODQpIj48bGluZWFyR3JhZGllbnQgaWQ9IkEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMCIgeTE9IjUyLjUiIHgyPSIxOTAiIHkyPSI1Mi41Ij48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiM1MmMzZTciLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiMwMDg5Y2MiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGQ9Ik0xOS41IDM0LjdjLTMuOS4xLTguMi41LTkuNC44IDEuMi0uMyA1LjUtLjcgOS40LS44bTIuNCA1LjZoLTIuMmMtLjIuOS0uMyAxLjgtLjQgMi43bC0xLjYgOS43aDIuN2MzLjUgMCA2LjEtMi45IDYuMS03LjMgMC0zLjEtMS44LTUuMS00LjYtNS4xbTI5LjggMTAuNWMtMS42IDAtMi43IDMuMS0zLjMgNS42aC45YzIgMCAzLjYtMS4zIDMuOC0yLjl2LS42YzAtLjUtLjEtMS0uNC0xLjQtLjEtLjQtLjUtLjctMS0uN201Mi4zLjRjLS4xIDAtLjEtLjEtLjItLjEtLjEtLjEtLjMtLjEtLjQtLjEtLjMgMC0uNi4xLS44LjMtLjEuMS0uMi4xLS4zLjJzLS4xLjItLjIuMmMtLjUuNy0uOSAxLjQtMS4xIDIuMi0uMS4xLS4xLjMtLjIuNS0uMi41LS4zIDEuMS0uNSAxLjZsLS4zIDEuM2MtLjIgMS40LS40IDIuOS0uNCA0LjRsLjEgMi4yYS45LjkgMCAwIDAgLjEuNWwuMyAxLjIuMy42Yy4zLjYuNi45IDEgLjkuMiAwIC4zIDAgLjUtLjFzLjQtLjIuNi0uNGMuNi0uNyAxLjItMS45IDEuNy0zLjVsLjMtMS4yLjMtMS41LjItMi4xYy4xLS43LjEtMS4zLjEtMiAuMS0xLjQtLjEtMi45LS42LTQuMyAwLS4yLS4yLS42LS41LS44bTc2LjYgOC44bC41LTMuNGMyLjItLjIgMy45LS42IDUuMi0xLjUgMS42LTEgMy42LTIuOSAzLjYtNi42IDAtMi0uNS0zLjktMS40LTUuNi0xLTEuOC0yLjktMi45LTQuOS0yLjloLS4zYy0uMS0zLTIuNi01LjMtNS42LTUuNC0yLjggMC01LjYuMi04LjMuNi0yLjQuNC00LjMgMi42LTQuNyA1IDAgLjEtNi40IDAtMTAuNiAwLTMuMyAwLTUgMS42LTUgMS42cy0xLjYtMi4xLTUuOS0xLjZjLTIuMS4xLTQuMS40LTYuMi44LjQtMi42LjctNS4yLjgtNy44VjMzYzAtMy4xLTIuNS01LjYtNS42LTUuNy00LjEgMC04LjguNi0xMS4yIDEuMS0yLjYuNy00LjQgMy4xLTQuMyA1LjguMSAyLjQtMSA5LjYtMSA5LjYtMi42LTIuMi02LjEtMy40LTEwLjEtMy40LTMuNiAwLTcuMi44LTEwLjQgMi41LTEuMS0xLjItMi43LTItNC4zLTEuOS0zLjIgMC01LjYgMC03LjkuMi0xLjguMS0zLjQgMS4xLTQuNCAyLjctLjEtLjEtLjEtLjItLjItLjMtMS0xLjgtMi45LTIuOS00LjktMi45LTQuMiAwLTExLjUgMS4yLTExLjggMS40LTIuNS0xLjEtNS4yLTEuNy04LTEuNi00LjEtLjEtOC4xIDEtMTEuNSAzLjEtLjYtOC41LTcuOS0xNC4zLTE4LjMtMTQuMyAwIDAtMTIuNy41LTE1IDEtMi43LjYtNC42IDMuMS00LjQgNS44IDAgMS45LS4xIDMuOS0uNSA2TC4zIDY1LjljLS4zIDEuNC0xIDUuNyAxLjcgOC45IDEuMSAxLjMgMy4xIDIuOCA2LjYgMi44IDEuNiAwIDUuOS0uMiA5LjQtMS44LjktLjQgMS43LTEuMSAyLjMtMS45IDEuOSAyLjIgNC43IDMuOCA4LjggMy44IDMuNiAwIDcuMS0uOSAxMC4zLTIuNSAyLjkgMS43IDYuMiAyLjYgOS42IDIuNSA2LjEgMCAxMS44LTIuNCAxNS40LTYuNSAyIDUuMSA1LjcgNi4zIDguNyA2LjMgMi41IDAgNS41LS4zIDguNS0xLjggMi41LTEuMiAzLjYtNS4zIDQuMS02LjIgMi41IDUgNy41IDguMSAxMy44IDguMSA1IDAgOS45LTEuNiAxMy45LTQuOC4zLjUuNi45LjkgMS4zIDEuMyAxLjUgMy44IDMuMyA4LjEgMy4zIDMuMS4xIDYuMi0uOCA4LjctMi41IDEuNCAxLjQgMy43IDIuNyA3LjIgMi43IDIuNiAwIDUuMi0uNyA3LjUtMS45IDEuNyAxLjIgMy45IDEuOCA2LjUgMS44IDQuMSAwIDcuOC0xLjQgMTAuMi0zLjkgMiAyIDUuNSA0IDExLjUgNCA1LjUgMCAxMS0zLjUgMTMuOC04LjIgMi4yLTMuNS0uMi05LjctNy4yLTkuNE0zNi41IDQ1LjNjLS4zIDQuNC0zLjEgOC03LjQgMTAuM0wzMyA2NS45YzEuMSAyLjggMS44IDMuOSAzIDQuOC0uMy4yLS42LjMtLjkuNC0xLjkuNi00IDEtNiAuOS0yIDAtNC43LS41LTYuNC01LjRsLTIuOS04LjRoLTIuOWwtMS4zIDhjLS4yLjktLjMgMS44LS4zIDIuN3YuMmMwIC41LjEgMSAuMyAxLjUtMi4yIDEtNS4yIDEuMy03IDEuMy0xLjUgMC0yLjktLjUtMy0zLjEgMC0uNy4xLTEuNC4yLTIuMWwzLjctMjMuOGMuMy0xLjguNS0zLjcuNS01LjV2LTEuOWMxLjItLjMgNS41LS44IDkuNC0uOGg0LjNjMi42LS4xIDUuMS41IDcuNSAxLjUuNi4zIDEuMy43IDEuOCAxLjFzMSAuOSAxLjUgMS40Yy42LjggMS4xIDEuNiAxLjUgMi42LjMgMSAuNSAyIC41IDMuMXYuOW0xNC4zIDE2Yy0uNCAwLS44LjEtMS4xLjFoLTEuNnYuNmMuMiAyLjggMS40IDUuMiA0IDUuMmguNmMyLjUtLjMgNC0yLjEgNS4zLTIuMS42LjEgMS4yLjMgMS43LjZsMS4zLjhjLS45IDEuMy0yIDIuNC0zLjQgMy4yLTIuNiAxLjctNS42IDIuNS04LjcgMi41LTYuNiAwLTEwLjYtMy43LTEwLjktOS42di0xYzAtNy41IDQuOS0xNS43IDE1LjgtMTUuNyAxLjYgMCAzLjIuMiA0LjYuNyAyLjYuOSA0LjEgMi44IDQuMSA1LjMuMSAzLTEuOCA4LjUtMTEuNyA5LjRtMzAuMyA0LjhjLS45IDEuNS0xLjcgMy4xLTIuMyA0LjhDNzcgNzEuOCA3NSA3MiA3MyA3MmMtMS43IDAtMy4zLS44LTQuMS01LjJsLTIuNS0xMi41Yy0uNS0yLjUtMS4zLTUtMi4zLTcuNC45LS4yIDEuOC0uNCAyLjctLjUuMiAwIC40LS4xLjYtLjFoLjFjLjIgMCAuNCAwIC43LS4xaC4xYy41IDAgMS0uMSAxLjYtLjFoMy43Yy40LjguOCAxLjYgMS4xIDIuNC4xLjMuMi41LjMuOC4yLjYuMyAxLjIuNCAxLjhsMS43IDExLjRjMS40LTIuNyAyLjctNS41IDMuOS04LjMuOC0xLjkgMS41LTMuOCAyLTUuOC4yLS43LjMtMS4zLjUtMiAuNi0uMSAxLjItLjEgMS44LS4xaDUuNmMtLjIgMS43LS42IDMuMy0xLjMgNC45LTIuNCA1LjEtNS40IDEwLTguNSAxNC45bTMxLjEuMWMtLjkgMS4yLTIgMi4yLTMuMiAzLS4yLjItLjUuMy0uNy41IDAgMC0uMSAwLS4xLjEtLjIuMS0uNC4zLS42LjQgMCAwLS4xIDAtLjEuMS0uMi4xLS40LjItLjcuMyAwIDAtLjEgMC0uMS4xLS4zLjEtLjUuMi0uOC4zLS41LjItMS4xLjQtMS43LjYtLjEgMC0uMSAwLS4yLjEtLjIuMS0uNC4xLS42LjItLjEgMC0uMiAwLS4zLjEtLjIgMC0uNC4xLS42LjEtLjEgMC0uMiAwLS4zLjEtLjIgMC0uNC4xLS42LjFIOThjLS4yIDAtLjUtLjEtLjctLjEtLjEgMC0uMy0uMS0uNC0uMS0uMiAwLS40LS4xLS42LS4xLS4xIDAtLjMtLjEtLjQtLjEtLjItLjEtLjQtLjEtLjUtLjJzLS4zLS4xLS40LS4yYy0uMi0uMS0uMy0uMS0uNS0uMi0uMS0uMS0uMy0uMS0uNC0uMnMtLjMtLjItLjQtLjMtLjItLjItLjQtLjJjLS4xLS4xLS4zLS4yLS40LS4zbC0xLjItMS4yYy0uMS0uMS0uMi0uMi0uMy0uNC0uMS0uMS0uMi0uMi0uMy0uNGEuNzYuNzYgMCAwIDEtLjItLjRjLS4xLS4xLS4xLS4zLS4yLS40cy0uMS0uMy0uMi0uNC0uMS0uMy0uMi0uNGMtLjEtLjItLjEtLjMtLjItLjUgMC0uMS0uMS0uMy0uMS0uNCAwLS4yLS4xLS4zLS4xLS41IDAtLjEtLjEtLjMtLjEtLjQtLjEtLjUtLjItMS0uMi0xLjV2LTEuMmMwLTUuNiAyLjYtMTAuMyA2LjYtMTMuMS43LS41IDEuMy0uOSAyLjEtMS4yLjctLjMgMS41LS42IDIuMi0uOWguMWMuNC0uMS43LS4yIDEuMS0uM2guMWMuNC0uMS43LS4xIDEuMS0uMmguMWMuNC0uMS44LS4xIDEuMS0uMWgyLjhjLjMgMCAuNS4xLjguMWguMmMuMy4xLjYuMS45LjIuMSAwIC4yLjEuMy4xLjIuMS40LjEuNi4yLjEgMCAuMi4xLjMuMS4yLjEuNS4yLjcuMy4xIDAgLjIuMS4zLjJzLjMuMi40LjMuMi4xLjMuMmExLjM4IDEuMzggMCAwIDAgLjQuM2MuMi4xLjMuMy41LjRsLjguOGMuMi4zLjUuNi43LjkuMS4yLjIuMy4zLjUgMCAuMS4xLjEuMS4yLjggMS43IDEuMyAzLjUgMS4yIDUuNC0uMSAzLjItMS4zIDYuNy0zLjUgOS42bTE5LjctMjkuM2wtLjYgNC4yLTEuMSA3LjItMi44IDE3LjhjMCAuMi0uMS40LS4xLjZ2LjdjMCAuMS4xLjIuMS4zdi4xYzAgLjEuMS4yLjIuM2wuNC40Yy40LjMuOS40IDEuNC40LS40LjYtLjkgMS4xLTEuNSAxLjQtLjEgMC0uMS4xLS4yLjEtLjEuMS0uMy4yLS40LjNzLS4yLjEtLjMuMWMtLjEuMS0uMy4xLS40LjItLjIuMS0uNS4yLS44LjMtLjEgMC0uMi4xLS40LjEtLjIuMS0uNC4xLS42LjEtLjEgMC0uMiAwLS40LjEtLjIgMC0uNC4xLS43LjFoLTNjLS4xIDAtLjIgMC0uMi0uMS0uMSAwLS4xIDAtLjItLjEtLjEgMC0uMi0uMS0uMi0uMXMtLjEgMC0uMS0uMWMtLjEgMC0uMi0uMS0uMy0uMWgtLjFjLS40LS4yLS44LS41LTEuMS0uOXYtLjFjLS4xLS4xLS4xLS4yLS4yLS4zIDAgMCAwLS4xLS4xLS4xLS4xLS4xLS4xLS4yLS4xLS4zdi0uMWMwLS4xLS4xLS4yLS4xLS40di0uMWMwLS4xLS4xLS4zLS4xLS40di0uNmMwLS41IDAtLjkuMS0xLjRsNC4xLTI1LjVjLjEtLjMuMS0uNi4xLTEgLjItMS4yLjMtMi4zLjQtMy41di0yLjljLjIgMCAuMy0uMS41LS4xcy40LS4xLjYtLjFjLjMtLjEuNy0uMSAxLjEtLjIuMiAwIC40IDAgLjYtLjEuNi0uMSAxLjItLjEgMS45LS4yLjUgMCAuOS0uMSAxLjQtLjEgMS4yLS4xIDIuNS0uMSAzLjctLjEgMCAuOC0uMSAxLjgtLjEgMi44LS4zLjctLjQgMS4xLS40IDEuNE0xNTkuMiA2OWMtMS4yIDEuOC0zLjggMy02LjkgM2gtMWMtLjMgMC0uNi0uMS0uOS0uMmwtLjktLjNjLTEuNC0uNi0yLjItMi0xLjgtNC43bC4xLS41Yy0uMS4zLS4zLjUtLjUuOC0uMy41LS43IDEtMSAxLjQtLjQuNC0uOC44LTEuMiAxLjEtLjIuMi0uNC4zLS42LjVhOS4xMyA5LjEzIDAgMCAxLTEuMy44Yy0uOC40LTEuNy44LTIuNiAxLS40LjEtLjguMi0xLjIuMnMtLjcuMS0xLjEuMWgtLjljLS4xIDAtLjMgMC0uNC0uMS0uMSAwLS4yIDAtLjMtLjEtLjEgMC0uMi0uMS0uMy0uMXMtLjItLjEtLjMtLjFjMCAwLS4xIDAtLjEtLjEtMi4zLTEtMy0zLjctMi40LTcuM2wxLjYtMTAuMmMwLS4zLjEtLjYuMS0uOHYtLjNjMC0uMiAwLS4zLjEtLjV2LS44Yy4xLS42LjEtMS4xLjEtMS43di0xLjZjMC0uNiAwLTEuMS0uMS0xLjguMSAwIC4yLS4xLjQtLjEuMSAwIC4yIDAgLjQtLjFoOS4xYy4xIDIuMi0uNCA1LjItLjggOGwtMS40IDguNmMwIC4yLS4yIDEuNy0uMiAyLjFzMCAuOS4xIDEuM2MwIC4yLjEuNC4yLjcuMS4xLjIuMy4zLjNoLjFjLjMgMCAuOC0uMyAxLjQtLjkuOS0uOSAxLjYtMiAyLjItMy4xLjItLjUuNS0uOS43LTEuNS4yLS41LjQtMS4xLjYtMS42LjEtLjMuMi0uNi4yLS45bC43LTQuOWMuMS0uNy4yLTEuMy4zLTEuOWwuMy0yLjhjLjEtLjkuMi0xLjkuMi0zIDEuMi0uMSA1LjktLjcgOS41LS42LS4xIDIuNy0uNCA1LjQtLjkgOC4xbC0xLjkgMTJjMCAxLjcuOCAyLjYgMi4zIDIuNm01LjYtMy4yYzAtLjYgMC0xLjIuMS0xLjdsMi0xMi41Yy0uNCAwLS42LjEtLjguMS0uNS4xLS43LjEtLjkuMi0uMy4xLS43LjEtMSAuMmExNi4zMSAxNi4zMSAwIDAgMSAwLTUuNGMuNCAwIC44IDAgMS40LS4xaDIuNGMuNy0xLjkgMS44LTMuNSAyLjItNS43LjYtLjEgMS40LS4yIDIuMi0uMy40IDAgLjYtLjEuOS0uMXMuNiAwIDEtLjFjMS0uMSAyLjEtLjEgMy40LS4xLS4xIDEuNy0uMyAzLjgtLjYgNi4zaDEuOGMyLjggMCAzLjktLjMgNC44LTEgLjUuOS44IDEuOS44IDIuOSAwIDEuNC0uNCAyLjMtNC44IDIuNGgtMy4zbC0yIDEyLjV2LjhjMCAxLjcuOCAzLjEgMi4xIDMuMSAyLjEgMCAyLjYtMS42IDMuNC0xLjYgMS45LjMgMyAxLjQgMyAxLjQtMS40IDIuNy01IDUuMi04LjggNS4yLTUuOC0uMS05LjEtMi43LTkuMy02LjV6IiBmaWxsPSJ1cmwoI0EpIi8+PC9nPjwvc3ZnPg=="></img>
            </a>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-9">
            <!-- About The site --> 
            <h3>Welcome</h3>
            <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <!-- Software -->
            <h3 id="software" class="border-bottom border-secondary border-1">Software</h3>
            <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5 class="d-flex justify-content-between">
                            <span class="text-truncate">Title description</span>
                            <span class="badge bg-info ms-2 me-1">Soon</span>
                        </h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5 class="d-flex justify-content-between">
                            <span class="text-truncate">Title description</span>
                            <span class="badge bg-warning ms-2 me-1">In progress</span>
                        </h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5 class="d-flex justify-content-between">
                            <span class="text-truncate">Title description</span>
                            <span class="badge bg-info ms-2 me-1">Soon</span>
                        </h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5 class="d-flex justify-content-between">
                            <span class="text-truncate">Title description</span>
                            <span class="badge bg-secondary ms-2 me-1">Suspended</span>
                        </h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5 class="d-flex justify-content-between">
                            <span class="text-truncate">Title description</span>
                            <span class="badge bg-primary ms-2 me-1">Some status</span>
                        </h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                </div>
            </div>
            <!-- Models -->
            <h3 id="models" class="border-bottom border-secondary border-1">Models</h3>
            <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                </div>
            </div>
            <!-- Projects -->
            <h3 id="projects" class="border-bottom border-secondary border-1">Projects</h3>
            <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <h3 class="mt-1"><a class="link-primary text-decoration-none text-uppercase" href="#">Title heading</a></h3>
                        <h5>Title description</h5>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                <rect width="300" height="200" fill="#cccccc"></rect>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="nunito" font-size="26px" fill="#333333">Image</text>   
                            </svg>
                        </a>
                        <p class="fs-5">Some text</p>
                        <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                </div>
            </div>
            <!-- Contact -->
            <h3 id="contact" class="border-bottom border-secondary border-1">Contact</h3>
            <p class="fs-5">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <div class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-contact-form">Send message</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-contact-form" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Send message</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form class="row g-3" method="POST" id="contact-form" autocomplete="on">
                    @csrf
                    <div class="col-12">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName" name="name" autocomplete="name">
                        <span class="text-danger" role="alert"><strong id="errorName"></strong></span>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" autocomplete="email">
                        <span class="text-danger" role="alert"><strong id="errorEmail"></strong></span>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="inputPhone" name="phone" autocomplete="tel">
                        <span class="text-danger" role="alert"><strong id="errorPhone"></strong></span>
                    </div>
                    <div class="col-12">
                        <label for="inputMessage" class="form-label">Your message</label>
                        <textarea class="form-control" id="inputMessage" name="message" rows="4"></textarea>
                        <span class="text-danger" role="alert"><strong id="errorMessage"></strong></span>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkSendCopy" name="check-send-copy" checked>
                            <label class="form-check-label" for="checkSendCopy">
                                Send me a copy of this message
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" id="contact-send-button" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer.items')
<li class="nav-item"><a href="#top" class="nav-link px-2"><i class="bi bi-arrow-up-circle" style="font-size: 28px;"></i></a></li>
@endsection

@section('scripts')
<script type="module">
$('body').on('click', function (event) {
    // active-link
    $('.active-link').removeClass('active');
    if ($(event.target).is('.active-link')) {
    	$(event.target).addClass('active');
    }
});
$('.external-link').on('click', function(event) {
    // external-link
    event.preventDefault();
    var site = $(this).attr('name');
    var link = $(this).attr('href');
    // request a QR code image
    $.ajax({
        url: '/qrcode/text',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        data: {
            format: 'svg',
            size: '120',
            margin: '0',
            encoding: 'UTF-8',
            text: btoa(link),
        },
        success: function(data) {
            $('#external-qrcode').html(data);
        }
    });
    Swal.fire({
        title: 'Go to ' + site + ' ?',
        html: '<div id="external-qrcode"></div><br /><a href="' + link + '" target="_blank">' + link + '</a>',
        showCancelButton: true,
        cancelButtonText: 'Cancel',
        showConfirmButton: true,
        confirmButtonText: 'Open'
    }).then((result) => {
        if (result.isConfirmed) {
            var win = window.open(link, '_blank');
            if (win) {
                win.focus();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please allow popups for this website!',
                    footer: '<a href="https://www.google.com/search?q=allow+popups+for+the+website">Why do I have this issue?</a>'
                });
            }
        }
    });
});
$('#modal-contact-form').on('hidden.bs.modal', function() { 
    // modal reset
    $(this).find('form').trigger('reset');
    // clear errors
    $(this).find('input,textarea').removeClass('is-invalid');
    $(this).find('[role="alert"]').html('');
}) ;
$('#contact-form').on('submit', function(event) {
    // contact-form
    event.preventDefault();
    // submit
    $.ajax({
        url: '/contact',
        type: 'POST',
        data: $(this).serialize(),
        success: function() {
            Swal.fire({
                text: "Thank you for your message, we will contact you soon!",
                icon: "success"
            }).then((result) => {
                $('#modal-contact-form').modal('hide');
            });
        },
        error: function(xhr, status, error) {
            // there was an error
            var json = (xhr.responseJSON) ? xhr.responseJSON : JSON.parse(xhr.responseText);
            if (json.errors) {
                if (json.errors.name) {
                    $('#inputName').addClass('is-invalid');
                    $('#errorName').html(json.errors.name[0]);
                } else {
                    $('#inputName').removeClass('is-invalid');
                    $('#errorName').html('');
                }
                if (json.errors.email) {
                    $('#inputEmail').addClass('is-invalid');
                    $('#errorEmail').html(json.errors.email[0]);
                } else {
                    $('#inputEmail').removeClass('is-invalid');
                    $('#errorEmail').html('');
                }
                if (json.errors.phone) {
                    $('#inputPhone').addClass('is-invalid');
                    $('#errorPhone').html(json.errors.phone[0]);
                } else {
                    $('#inputPhone').removeClass('is-invalid');
                    $('#errorPhone').html('');
                }
                if (json.errors.message) {
                    $('#inputMessage').addClass('is-invalid');
                    $('#errorMessage').html(json.errors.message[0]);
                } else {
                    $('#inputMessage').removeClass('is-invalid');
                    $('#errorMessage').html('');
                }
            }
        }        
    });
});
</script>
@endsection
