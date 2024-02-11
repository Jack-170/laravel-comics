<footer>
    <div class="list-section">
        <div class="container">

            <div>

                <ul>
                    <li>
                        <h3>Dc Comics</h3>
                    </li>

                    <li>Characters</li>

                    <li>Comics</li>

                    <li>Movies</li>

                    <li>TV</li>

                    <li>Games</li>

                    <li>Videos</li>

                    <li>News</li>

                    <li>
                        <h3>Shop</h3>
                    </li>

                    <li>Shop DC</li>

                    <li>Shop DC Collectibles</li>

                </ul>


            </div>


            <div>
                <ul>
                    <li>
                        <h3>Dc</h3>
                    </li>

                    <li>Terms of use </li>

                    <li>Privacy policy(new)</li>

                    <li>Ad Choiches</li>

                    <li>Advertising</li>

                    <li>Jobs</li>

                    <li>Subscriptions</li>

                    <li>Talent Workshops</li>


                    <li>Cpsc Certificates</li>

                    <li>Ratings</li>

                    <li>Shop help</li>
                    <li>COntact us</li>
                </ul>


            </div>

            <div>
                <ul>
                    <li>
                        <h3>Sites</h3>
                    </li>

                    <li>DC</li>

                    <li>Mad Magazine</li>

                    <li>DC Kids</li>

                    <li>DC Universe</li>

                    <li>DC Power Visa</li>


                </ul>


            </div>

        </div>
    </div>


    <div class="last-container">

        <div>
            <h4>SIGN-UP NOW!</h4>
        </div>


        <div class="flex">

            <h3>FOLLOW US</h3>


            <div class="flex margin-left">

                <div v-for="(image ,i) in images" :key="i" class="box-img">
                    <img :src="GetImagePath(image.src)" alt="">
                </div>

            </div>



        </div>

    </div>
</footer>

