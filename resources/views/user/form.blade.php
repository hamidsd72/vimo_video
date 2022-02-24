<div class="form-group">
    <label for="name">نام کاربر</label>
    <input type="text" class="form-control text-right" id="name" name="name" value="{{ Auth::user()->name }}" required>
</div>
<div class="form-group">
    <label for="email">آدرس ایمیل</label>
    <input type="text" class="form-control text-right" id="email" name="email" value="{{ Auth::user()->email }}" required>
</div>
<div class="form-group">
    <label for="mobile">موبایل</label>
    <input type="text" class="form-control text-right" id="mobile" name="mobile" value="{{ Auth::user()->mobile }}" required>
</div>
<div class="form-group">
    <label for="password">رمز عبور</label>
    <input type="text" class="form-control text-right" id="password" name="password" value="{{ Auth::user()->password }}" required>
</div>