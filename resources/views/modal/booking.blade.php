<!-- BOOK ONLINE BOXLIGHT -->
@include('includes.style')
<div id="book_online" class="booking_popup">
    <div class="book_online">
      <div class="makeup_fl_form">
        <h3>Book Online</h3>
        <form
          action="{{ route('customer.store') }}"
          method="post"
          enctype="multipart/form-data"
        >
        @csrf
          <div class="fl-col-6">
            <div class="your-name">
              <label>Name<span>*</span></label>
              <input type="text" name="name" id="name" placeholder="Name" />
            </div>
          </div>
          <div class="fl-col-6 last">
            <div class="your-email">
              <label>Email<span>*</span></label>
              <input type="text" name="email" id="email" placeholder="Email" />
            </div>
          </div>
          <div class="fl-col-6">
            <div class="your-phone">
              <label>Phone<span>*</span></label>
              <input
                type="text"
                name="phone"
                id="phone"
                placeholder="Phone Number"
              />
            </div>
          </div>
          <div class="fl-col-6 last">
            <div class="fl-col-8">
              <div
                class="datepicker-input"
                data-date-format="dd / mm / yy"
                data-first-day="1"
              >
                <label>Date: <span>*</span></label>
                <input type="datetime" id="reservation-date" name="date" />
              </div>
            </div>
            <div class="fl-col-4 last">
              <div class="your-time">
                <label>Time: <span>*</span></label>
                <input id="time" name="time" type="text" class="time" />
              </div>
            </div>
          </div>
          <div class="your-name">
            <label>Choose Service<span>*</span></label>
            <select name="paket" required>
              <option>Bridal Makeup (Rp. 450.000)</option>
              <option>Commercial Makeup (Rp. 550.000)</option>
              <option>Party Makeup (Rp. 350.000)</option>
              <option>Theatrical Makeup (Rp. 350.000)</option>
              <option>Television Makeup (Rp. 450.000)</option>
              <option>Movie Makeup (Rp. 350.000)</option>
            </select>
          </div>
          <div class="fl-col-6 last">
            <div class="your-email">
              <label>Upload Payment <span>*</span></label>
              <input type="file" name="photo" id="fileupload" required />
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="button">
            <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Daftar Sekarang">
          </div>
          <!-- RETURN MESSAGES -->
          <!-- /RETURN MESSAGES -->
        </form>
      </div>
    </div>
  </div>
  @include('includes.script')
  <!-- /BOOK ONLINE BOXLIGHT -->
