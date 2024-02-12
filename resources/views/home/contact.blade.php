<section class="form-group" id="contact"> <!-- Added 'pt-5' for padding-top and 'pb-5' for padding-bottom -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3527.143438338049!2d-82.53058642538113!3d27.866863818439437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2dd0638132571%3A0x15560cd860cb5721!2s4950%20W%20Prescott%20St%2C%20Tampa%2C%20FL%2033616%2C%20USA!5e0!3m2!1sen!2ske!4v1707759286704!5m2!1sen!2ske"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-md-6 py-100 px-50">
                <h2 class="contact-title text-center mb-4">{{ 'Contact Us' }}</h2>
                <!-- Optional: Added 'mb-4' for a little margin below the title -->
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="nameHelp" class="form-text text-muted">Please enter a name we can
                                    refer you as.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                    with anyone else.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
