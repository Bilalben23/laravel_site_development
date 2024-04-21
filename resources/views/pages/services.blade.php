    <section class="laravel-solutions" id="services">
        <div class="title">
            <h5>Want to Develop a Custom Laravel Web Solution?</h5>
        </div>
        <div class="cards-box">
            <div>
                <p class="card-title">Laravel Web Applications</p>

                <p class="card-description">Want to build a highly-efficient web app? Leverage our experience in Laravel development to build robust web applications. With the flexibility and developer efficiency provided by the PHP Laravel framework, we custom-build user-friendly web applications with efficient backend codes, unique functionalities, and high-quality UI design.</p>
            </div>
            <div>
                <p class="card-title">Enterprise Solutions</p>
                <p class="card-description">Are you looking to increase efficiency & productivity in your daily business operations? Automate and streamline the day-to-day processes of your enterprise with our custom Laravel development services. Develop an easy-to-use Laravel web application that reduces your employees' workload and automates repetitive work.</p>
            </div>
            <div>
                <p class="card-title">Custom Web Solutions</p>
                <p class="card-description">Build custom web solutions with our professional Laravel developers tailored to your business requirements. Be it a website, a web application, a cloud solution, or cross-platform software, our team will help you. We provide Laravel development services to all businesses, be it Laravel websites for startups or complex CMS for enterprises.</p>
            </div>
            <div>
                <p class="card-title">eCommerce Solutions</p>
                <p class="card-description">Want to reach more customers with your products & services? Partner with us to develop a secure, performative eCommerce website to enhance product visibility. We will build websites for you using the Laravel PHP framework. Stand out to your users with unparalleled user experience - quick logins, enhanced searches, and secure payments.</p>
            </div>
            <div>
                <p class="card-title">Laravel Migration Services</p>
                <p class="card-description">Want to upgrade your website to the latest Laravel version? Looking to migrate your legacy systems to Laravel? Hire Laravel developers to get Laravel data migration solutions that enhance your web app's speed and performance without affecting the logic or functioning of the web app..</p>
            </div>
            <div>
                <p class="card-title">Laravel Cloud Integration</p>
                <p class="card-description">Our experienced developers use the latest cloud tools to develop custom cloud web applications. Get high security, user authentication, database management, and smooth collaboration with custom Laravel web development solutions. We will also migrate your existing web solution to a cloud-based Laravel platform.</p>
            </div>
        </div>
    </section>

    <section class="tech-stack-container">
        <h6>
            Our Technology Stack
        </h6>
        <p>
            The Laravel framework is widely-used for backend web development. But as a top Laravel application development company, we also use other technologies for full-stack website development.
        </p>
        <div x-data="{
            currentItem: 'frontend-techs',
        }">
            <ul>
                <li @click="currentItem = 'frontend-techs'" :style="{color: currentItem === 'frontend-techs'? '#FDB829': ''}">Frontend Technologies</li>

                <li @click="currentItem = 'databases'" :style="{color: currentItem === 'databases'? '#FDB829': ''}">Database</li>

                <li @click="currentItem = 'servers'" :style="{color: currentItem === 'servers'? '#FDB829': ''}">Server</li>

                <li @click="currentItem = 'payments-gateways'" :style="{color: currentItem === 'payments-gateways'? '#FDB829': ''}">Payment Gateways</li>
            </ul>
            <div class="front-end-techs" x-show="currentItem === 'frontend-techs'">
                <div>
                    <img src="https://www.svgrepo.com/show/452092/react.svg" alt="Reactjs-logo">
                    <p>React</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/353396/angular-icon.svg" alt="Angularjs-logo">
                    <p>Angular</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/452130/vue.svg" alt="Vuejs-logo">
                    <p>Vue</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/353498/bootstrap.svg" alt="Bootstrap-logo">
                    <p>Bootstrap</p>
                </div>
            </div>

            <div class="databases" x-show="currentItem === 'databases'">

                <div>
                    <img src="https://www.svgrepo.com/show/373848/mysql.svg" alt="MysSQL-logo">
                    <p>MySQL</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/354200/postgresql.svg" alt="Postgresql-logo">
                    <p>PostGreSQL</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/374094/sqlite.svg" alt="SQLite-logo">
                    <p>SQLite</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/353735/firebase.svg" alt="Firebase-logo">
                    <p>Firebase</p>
                </div>
            </div>

            <div class="servers" x-show="currentItem === 'servers'">

                <div>
                    <img src="https://www.svgrepo.com/show/373433/apache.svg" alt="Apache-logo">
                    <p>Apache</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/394309/nginx.svg" alt="Nginx-logo">
                    <p>Nginx</p>
                </div>
            </div>

            <div class="payments-gateways" x-show="currentItem === 'payments-gateways'">

                <div>
                    <img src="https://www.svgrepo.com/show/475665/paypal-color.svg" alt="Paypal-logo">
                    <p>Paypal</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/394340/payu.svg" alt="Payu-logo">
                    <p>Payu</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/364885/stripe-logo-fill.svg" alt="Stripe-logo">
                    <p>Stripe</p>
                </div>
                <div>
                    <img src="https://www.svgrepo.com/show/354612/adyen.svg" alt="Adyen-logo">
                    <p>Adyen</p>
                </div>
            </div>
        </div>
    </section>
