@extends('user.layouts.main')

@section('container')
    <!-- Content -->
    <div class = "container p-3 p-md-3">
        <!-- title -->
        <div class = "title my-3 my-md-3">
            <h2 class="mb-0"><strong>Kritik dan Saran</strong></h2>
            <div class="straight-line d-flex my-4">
                <div class="line"></div>
                <span class="material-icons">fastfood</span>
                <div class="line"></div>
            </div>
        </div>
        <!-- end of title -->
        <div class = "contact-row-1">
          <form class = "contact-form" action="/feedback" method="POST">
            @csrf
            <input type = "text" class = "form-control" placeholder="Your Name" id="name" name="name">
            <input type = "email" class = "form-control" placeholder="Your Email" id="email" name="email">
            <textarea rows = "5" class = "form-control" placeholder="Message" id="description" name="description"></textarea>
            <button type="submit" class="form-submit-btn" id="btnSave">Send Message</button>
          </form>
        </div>
    </div>
@endsection