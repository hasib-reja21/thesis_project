
<style>
    body{
        background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
    }
    .contact-form{
        background: #fff;
        margin-top: 8%;
        margin-bottom: 5%;
        width: 70%;
    }
    .contact-form .form-control{
        border-radius:1rem;
    }
    .contact-image{
        text-align: center;
    }
    .contact-image img{
        border-radius: 6rem;
        width: 11%;
        margin-top: -3%;
        transform: rotate(29deg);
    }
    .contact-form form{
        padding: 14%;
    }
    .contact-form form .row{
        margin-bottom: -7%;
    }
    .contact-form h3{
        margin-bottom: 8%;
        margin-top: -10%;
        text-align: center;
        color: #0062cc;
    }
    .contact-form .btnContact {
        width: 50%;
        border: none;
        border-radius: 1rem;
        padding: 1.5%;
        background: #dc3545;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
    }
    .btnContactSubmit
    {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        color: #fff;
        background-color: #0062cc;
        border: none;
        cursor: pointer;
    }
    @keyframes slideFromTopToBottom {
 
               0% {
                    transform: translateY(-100%);
                    opacity: 0;
                }

                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            #animated-content {
                animation: slideFromTopToBottom 1s ease-in-out;
            }
</style>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <div class="container contact-form " id="animated-content">
                    <div class="contact-image">
                        <!-- <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/> -->
                    </div>
                    <form action="{{route('user.contact.store')}}" method="post">
                        @csrf
                        <h3>Drop Us a Message</h3>
                    <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                                </div>
                                <div class="form-group">
                                <button class="btnContact" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                </div>
                            </div>
                     </div>
                    </form>
        </div>