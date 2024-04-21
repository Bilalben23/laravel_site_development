<section class="faqs">
    <h6>
        Frequently Asked Questions
    </h6>

    <div class="faqs-container" x-data="{
            question: null,
            set setQuestion(question) {
                if (this.question === question) {
                    this.question = null;
                } else {
                    this.question = question;
                }
            }
        }" @click.outside="setQuestion = null">


        <div class="question-box">
            <button type="button" @click="setQuestion = 'q1'" :style="{borderColor: question === 'q1'? '#FDB829': '#808080'}">

                Do you sign NDA for Laravel Projects?
            </button>

            <div x-show="question === 'q1'" x-transition>
                <p>I don't sign NDAs as I don't have the ability to sign legal agreements. However, I can assure you that your interactions and information shared here are treated with strict confidentiality as per OpenAI's policies. If you have specific concerns about privacy ...</p>
            </div>
        </div>

        <div class="question-box">
            <button type="button" @click="setQuestion = 'q2'" :style="{borderColor: question === 'q2'? '#FDB829': '#808080'}">
                I didn't find the laravel services I was looking for, what should i do?
            </button>

            <div x-show="question === 'q2'" x-transition>
                <p>By taking these steps and exploring various avenues, you can increase your chances of finding or creating the Laravel services that align with your project goals.</p>
            </div>
        </div>
        <div class="question-box">
            <button type="button" @click="setQuestion = 'q3'" :style="{borderColor: question === 'q3'? '#FDB829': '#808080'}">
                Do you sign NDA for Laravel Projects?
            </button>

            <div x-show="question === 'q3'" x-transition>
                <p>I don't sign NDAs as I don't have the ability to sign legal agreements. However, I can assure you that your interactions and information shared here are treated with strict confidentiality as per OpenAI's policies. If you have specific concerns about privacy ...</p>
            </div>
        </div>
        <div class="question-box">
            <button type="button" @click="setQuestion = 'q4'" :style="{borderColor: question === 'q4'? '#FDB829': '#808080'}">
                I didn't find the laravel services I was looking for, what should i do?
            </button>

            <div x-show="question === 'q4'" x-transition>
                <p>By taking these steps and exploring various avenues, you can increase your chances of finding or creating the Laravel services that align with your project goals.</p>
            </div>
        </div>
        <div class="question-box">
            <button type="button" @click="setQuestion = 'q5'" :style="{borderColor: question === 'q5'? '#FDB829': '#808080'}">

                Do you sign NDA for Laravel Projects?
            </button>

            <div x-show="question === 'q5'" x-transition>
                <p>I don't sign NDAs as I don't have the ability to sign legal agreements. However, I can assure you that your interactions and information shared here are treated with strict confidentiality as per OpenAI's policies. If you have specific concerns about privacy ...</p>
            </div>
        </div>
        <div class="question-box">
            <button type="button" @click="setQuestion = 'q6'" :style="{borderColor: question === 'q6'? '#FDB829': '#808080'}">
                I didn't find the laravel services I was looking for, what should i do?
            </button>

            <div x-show="question === 'q6'" x-transition>
                <p>By taking these steps and exploring various avenues, you can increase your chances of finding or creating the Laravel services that align with your project goals.</p>
            </div>
        </div>
    </div>
</section>


<footer id="contact-us">

    <div class="header">
        <h6>
            Let's Get To Know Each Other
        </h6>
        <p>
            We will validate your idea and provide a personalized quote. Without any commitments. Without any fees.
        </p>
    </div>
    <div class="form-box">
        <form action="{{ route("contact") }}" method="POST" >
            @csrf
            <div>
                <input type="text" name="name" placeholder="Name*" value="{{ old("name") }}">
                @error('name')
                <p class="error-message">*{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="email" name="email" placeholder="Email*" value="{{ old("email") }}">
                @error('email')
                <p class="error-message">*{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit">Book Your Free Consultation</button>
            </div>
        </form>

        <address>
            <h6>Our Offices</h6>
            <div>
                <p>Canada</p>
                <p>2 County Court Blvd., Suite 400, <br> Brampton, Ontario L6W 3W8</p>
            </div>
            <div>
                <p>USA</p>
                <p>651 North Broad Street Suite 206, <br> Middletown, Delaware 19709</p>
            </div>
        </address>
    </div>
</footer>
