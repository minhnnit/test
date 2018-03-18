@extends('app')

@section('main_content')
    <div class="col-lg-9 col-md-9 col-sm-12 main search-results pull-md-right clearfix">
        <div class="store-title clearfix">
            <h1 class="store-subtitle ball">
                Amazon UK Promo Codes  &amp; Coupons
            </h1>
            <div class="store-subtitle bcode">Coupon Codes from Amazon UK</div>
            <div class="store-subtitle bsale">Deals from Amazon UK</div>
            <div class="store-subtitle bshipping">Free Shipping from Amazon UK</div>
            <div class="store-subtitle bprintable">Printable coupons from Amazon UK</div>
        </div>
        <div class="inpage-search clearfix">
            <div class="store-filters filters-type pull-left">
                <label id="fall" data-title="ball" data-filter="all" class="active">
                    All <span style="opacity: 1;">50</span>
                </label>
                <label id="fcodes" data-title="bcode" data-filter="code">
                    Coupons <span style="opacity: 1;">24</span>
                </label>
                <label id="fdeals" data-title="bsale" data-filter="deal">
                    Deals <span style="opacity: 1;">26</span></label>
                <label id="fshipping" data-title="bshipping" data-filter="shipping">
                    Free Shipping <span style="opacity: 1;">1</span>
                </label>
                <label id="fverified" data-title="bverified" data-filter="verified" class="pull-right disabled">
                    <div class="verified">Verified Only</div>
                </label>
            </div>
        </div>

        <div class="search-response"></div>
        <div id="active-coupons" class="clearfix">
            <!-- start items -->
        @foreach(range(0,10) as $v)
            @include('elements.coupon_list')
        @endforeach
        <!-- end items -->
        </div>

        <div class="offer-search-wrap clearfix">
            <span class="pull-right beta-label">beta</span>
            <div class="offer-search-form">
                <form id="searchLink" method="post" action="/store/searchlink" novalidate="novalidate">
                    <p>What product do you want to buy from amazon.co.uk?</p>
                    <input required="" type="text" placeholder="Insert URL here. (http://amazon.co.uk/product-link)" id="offerSearch" name="url" aria-required="true">
                    <input type="hidden" name="sid" value="4">
                    <button type="submit" data-css="https://static.dontpayfull.com/static/css/keyframes.css">Find best
                        offer <i class="df-chevron-right"></i></button>
                    <div class="offer-search__tip">
                        <em>Insert the link</em> for the product you want to buy and we will search for the best
                        offer available so you can save as much money as possible.
                    </div>
                    <input type="hidden" name="dkCrftoe" value="06ebf8816ba31c920831af317a121f94ce852fdf"></form>
            </div>
            <div class="offer-search-email">
                <form id="searchLinkFinish" method="get" action="/store/searchlinkfinish" novalidate="novalidate">
                    <div class="offer-search-email__notified">
                        <div>
                            <label for="amount">Desired price ($):</label>
                            <input type="text" id="amount" name="maxPrice" style="border:0; color:#f6931f; font-weight:500;">
                        </div>
                        <div id="slider-range"></div>
                    </div>
                    <input type="hidden" name="id" value="" id="offerID">
                    <div class="searchLinkFinish__bottom">
                        <div>
                            <input type="checkbox" name="agree" id="agreeInput" checked="">I want to be notified
                            about similar offers
                        </div>
                        <button id="notifyMe" class="signupbox" type="submit">Notify me!
                        </button>
                    </div>
                    <p class="notifyMe__text" style="display:none"></p>
                    <input type="hidden" name="dkCrftoe" value="06ebf8816ba31c920831af317a121f94ce852fdf"></form>
            </div>
            <div class="repeat-search"><span class="df df-history"></span>Try Another Product</div>
        </div>
        <div class="newsletter-list-footer clearfix">
            <div class="newsletter-list-footer__left">
                <img src="https://cdn2.dontpayfull.com/media/logos/m/amazon.co.uk.jpg?v=20170515151044724658" alt="Amazon UK">
            </div>
            <div class="newsletter-list-footer__middle">
                <p class="title">Never miss a deal from Amazon UK!</p>
                <p class="newsletter-list-footer__text">
                    Follow this store to get the best deals. A good deal can make your day better!
                </p>
            </div>
            <div class="newsletter-list-footer__right">
                <p data-id="4" class="follow ">
                    <i class="nc-heart-2"></i>
                    Follow
                </p>
            </div>
        </div>
        <div class="prefooter-box clearfix">
            <h2 class="title toggled">Top Amazon UK Promo Codes  &amp; Coupons</h2>
            <div class="content">
                <table class="table table-responsive table-hover" style="margin:0">
                    <thead>
                    <tr>
                        <th>Offer Description</th>
                        <th>Expires</th>
                        <th>Code</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>30% Off on Usn Sports Nutrition</td>
                        <td>-</td>
                        <td>SAV*****</td>
                    </tr>
                    <tr>
                        <td>50% Off on Everything</td>
                        <td>-</td>
                        <td>6Z7*****</td>
                    </tr>
                    <tr>
                        <td>40% Off Storewide</td>
                        <td>-</td>
                        <td>8A6*****</td>
                    </tr>
                    <tr>
                        <td>20% Off Chinese Bitters for Health and Wellness</td>
                        <td>-</td>
                        <td>WMQ*****</td>
                    </tr>
                    <tr>
                        <td>50% Off Women's &amp; Men's Polarised Sunglasses by Aiblii</td>
                        <td>-</td>
                        <td>WFP*****</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="prefooter-box clearfix">
            <h2 class="title toggled">About Amazon UK</h2>
            <div class="content">
                <p class="custom-description">
                    Amazon.co.uk is one of the world's largest online retailers. It is your one-stop online shop for everything ranging from housewares to sporting goods, groceries to media and more! You will not believe all the money you will save shopping from the comfort of your own cozy couch. And you are in luck! We have all the lightening codes you need for the ultimate savings online.<br>
                    <br>
                    Amazon.co.uk is not just for buying goods and is passionate about meeting every kind of need. Their full range of services revolutionizes the shopping experience. This retailer not only delivers products but also helps shoppers supplement their passions by making it easier to access the things we use every day. You can stream music, rent movies, watch TV, print photos and even read books.<br>
                    <br>
                    Check out has never been easier with one click shopping and various payment options. Same-day to standard, shipping options are there to suit every need. Prime Now has also launched for the Prime member who needs goods within the hour. Amazon.com even offers financing options with their very own credit card for those in need of another way to pay.<br>
                    <br>
                    You can feel great using our codes online at amazon.com, a company that plans to hire 5,000 in the UK this year. It cares for communities, contributing in the areas where employees and customers live via volunteerism, monetary contributions and donating millions of pounds of product to help charities across the UK. But what about the earth? Don't worry, Amazon even has a long-term sustainability commitment for renewable energy and seeking improvements in operations and packaging.<br>
                    <br>
                    Don't let any of our Amazon coupons pass you by! Follow the merchant by clicking the heart at the top of the page or save individual deals by clicking on the star in the upper right corner of the deal box. You can even browse their latest newsletter right from our store page.
                </p>
            </div>
        </div>
        <div class="prefooter-box clearfix">
            <h2 class="title toggled">Frequently asked questions</h2>
            <div class="content">
                <ol class="store-faq">
                    <li class="item">
                        <span class="question">What is the biggest saving you can make on Amazon UK?</span>
                        <p class="answer">The biggest saving reported by our customers is $70</p>
                    </li>
                    <li class="item">
                        <span class="question">How much can you save on Amazon UK using coupons?</span>
                        <p class="answer">Our customers reported an average saving of £10</p>
                    </li>
                    <li class="item">
                        <span class="question">Is Amazon UK offering free shipping deals and coupons?</span>
                        <p class="answer">Yes, Amazon UK has 1 active free shipping offer</p>
                    </li>
                    <li class="item">
                        <span class="question">Is Amazon UK offering BOGO deals and coupons?</span>
                        <p class="answer">Yes, Amazon UK has 3 active BOGO offers</p>
                    </li>
                    <li class="item">
                        <span class="question">Is Amazon UK offering gift cards deals and coupons?</span>
                        <p class="answer">Yes, Amazon UK has 1 active gift cards offer</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>


    <!-- menu left -->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar-menu clearfix">
        <div class="sidebar-menu-box store clearfix">
            <div class="content">
                <a href="/hop/store/4" target="_blank" class="store-hop" id="left-hop" data-store="Amazon UK">
                    <img itemprop="logo" width="170" height="120" src="https://cdn2.dontpayfull.com/media/logos/wl/amazon.co.uk.jpg?v=20170515151044724658" alt="amazon.co.uk coupons or promo codes">
                </a>
                <button data-id="4" class="follow"><i class="nc-heart-2"></i></button>
                <a class="store-hop-btn" href="/hop/store/4" target="_blank">
                    Shop Now
                </a>
            </div>
        </div>
        <div class="sidebar-menu-box clearfix">
            <div class="rating-col rating-col-text text-center">
                <p>Would you recommend this store?</p>
            </div>
            <div class="rating-col rating-col-votes store_rating--votes" data-id="4">
                <span class="dpf-link thumb thumb-up df-thumbs-o-up "></span>
                <span class="dpf-link thumb thumb-down df-thumbs-o-down2 show-voting down hover "></span>
            </div>
            <div class="store_rating">
                Recommended by
                94%
                out of <span id="ratingCount">119</span> votes
            </div>
        </div>
        <div class="sidebar-menu-box clearfix">
            <div class="content">
                <div class="region-stores-item">
                    <span content="Amazon"></span>
                    <a href="/at/amazon.com">
                        Amazon Coupons
                    </a>
                </div>
                <div class="region-stores-item">
                    <span content="Amazon.fr"></span>
                    <a href="/at/amazon.fr">
                        Amazon.fr Coupons
                    </a>
                </div>
                <div class="region-stores-item">
                    <span content="Amazon DE"></span>
                    <a href="/at/amazon.de">
                        Amazon DE Coupons
                    </a>
                </div>
                <div class="region-stores-item">
                    <span content="Amazon Canada"></span>
                    <a href="/at/amazon.ca">
                        Amazon Canada Coupons
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-box clearfix">
            <h3 class="title">Top United Kingdom Stores</h3>
            <div class="content flex">
                <div class="flex-stores-item">
                    <img src="https://cdn2.dontpayfull.com/media/logos/w/studio.co.uk.jpg?v=20170515151044724658" data-original="https://cdn2.dontpayfull.com/media/logos/w/studio.co.uk.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="studio.co.uk coupons">
                    <a class="flex-stores-description" style="background-color:#001F44" href="/at/studio.co.uk">
                        Studio Coupons
                    </a>
                </div>
                <div class="flex-stores-item">
                    <img src="https://cdn3.dontpayfull.com/media/logos/w/sainsburys.co.uk.jpg?v=20170515151044724658" data-original="https://cdn3.dontpayfull.com/media/logos/w/sainsburys.co.uk.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="sainsburys.co.uk coupons">
                    <a class="flex-stores-description" style="background-color:#784906" href="/at/sainsburys.co.uk">
                        Sainsbury's Coupons
                    </a>
                </div>
                <div class="flex-stores-item">
                    <img src="https://cdn2.dontpayfull.com/media/logos/w/debenhams.com.jpg?v=20180109095157748524" data-original="https://cdn2.dontpayfull.com/media/logos/w/debenhams.com.jpg?v=20180109095157748524" class="img-responsive lazy-load" alt="debenhams.com coupons">
                    <a class="flex-stores-description" style="background-color:#333" href="/at/debenhams.com">
                        Debenhams Coupons
                    </a>
                </div>
                <div class="flex-stores-item">
                    <img src="https://cdn0.dontpayfull.com/media/logos/w/next.co.uk.jpg?v=20170515151044724658" data-original="https://cdn0.dontpayfull.com/media/logos/w/next.co.uk.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="next.co.uk coupons">
                    <a class="flex-stores-description" style="background-color:#333" href="/at/next.co.uk">
                        Next Coupons
                    </a>
                </div>
                <div class="flex-stores-item">
                    <img src="https://cdn1.dontpayfull.com/media/logos/w/base.com.jpg?v=20170515151044724658" data-original="https://cdn1.dontpayfull.com/media/logos/w/base.com.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="base.com coupons">
                    <a class="flex-stores-description" style="background-color:#780606" href="/at/base.com">
                        Base.com Coupons
                    </a>
                </div>
                <div class="flex-stores-item">
                    <img src="https://cdn1.dontpayfull.com/media/logos/w/houseoffraser.co.uk.jpg?v=20170515151044724658" data-original="https://cdn1.dontpayfull.com/media/logos/w/houseoffraser.co.uk.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="houseoffraser.co.uk coupons">
                    <a class="flex-stores-description" style="background-color:#FFFFFFFFFFFFFFF0FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFE" href="/at/houseoffraser.co.uk">
                        House of Fraser UK Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn1.dontpayfull.com/media/logos/w/oxfam.org.uk.jpg?v=20170515151044724658" data-original="https://cdn1.dontpayfull.com/media/logos/w/oxfam.org.uk.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="oxfam.org.uk coupons">
                    <a class="flex-stores-description" style="background-color:#337806" href="/at/oxfam.org.uk">
                        Oxfam Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn3.dontpayfull.com/media/logos/w/thehut.com.jpg?v=20170515151044724658" data-original="https://cdn3.dontpayfull.com/media/logos/w/thehut.com.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="thehut.com coupons">
                    <a class="flex-stores-description" style="background-color:#333" href="/at/thehut.com">
                        The Hut Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn0.dontpayfull.com/media/logos/w/very.co.uk.jpg?v=20170515151044724658" data-original="https://cdn0.dontpayfull.com/media/logos/w/very.co.uk.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="very.co.uk coupons">
                    <a class="flex-stores-description" style="background-color:#780649" href="/at/very.co.uk">
                        Very UK Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn0.dontpayfull.com/media/logos/w/littlewoods.com.jpg?v=20170515151044724658" data-original="https://cdn0.dontpayfull.com/media/logos/w/littlewoods.com.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="littlewoods.com coupons">
                    <a class="flex-stores-description" style="background-color:#333" href="/at/littlewoods.com">
                        Littlewoods UK Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn1.dontpayfull.com/media/logos/w/confetti.co.uk.jpg?v=20170515151044724658" data-original="https://cdn1.dontpayfull.com/media/logos/w/confetti.co.uk.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="confetti.co.uk coupons">
                    <a class="flex-stores-description" style="background-color:#333" href="/at/confetti.co.uk">
                        Confetti.co.uk Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn3.dontpayfull.com/media/logos/w/liberty.co.uk.jpg?v=20170515151044724658" data-original="https://cdn3.dontpayfull.com/media/logos/w/liberty.co.uk.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="liberty.co.uk coupons">
                    <a class="flex-stores-description" style="background-color:#333" href="/at/liberty.co.uk">
                        Liberty London Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn1.dontpayfull.com/media/logos/w/euro.mandmdirect.com.jpg?v=20170515151044724658" data-original="https://cdn1.dontpayfull.com/media/logos/w/euro.mandmdirect.com.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="euro.mandmdirect.com coupons">
                    <a class="flex-stores-description" style="background-color:#064D78" href="/at/euro.mandmdirect.com">
                        MandM Direct Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn0.dontpayfull.com/media/logos/w/bargaincrazy.com.jpg?v=20170515151044724658" data-original="https://cdn0.dontpayfull.com/media/logos/w/bargaincrazy.com.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="bargaincrazy.com coupons">
                    <a class="flex-stores-description" style="background-color:#333" href="/at/bargaincrazy.com">
                        Bargain Crazy Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn1.dontpayfull.com/media/logos/w/liverpoolfc.com.jpg?v=20170515151044724658" data-original="https://cdn1.dontpayfull.com/media/logos/w/liverpoolfc.com.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="liverpoolfc.com coupons">
                    <a class="flex-stores-description" style="background-color:#780906" href="/at/liverpoolfc.com">
                        liverpoolfc.com Coupons
                    </a>
                </div>
                <div class="flex-stores-item ls-hidden">
                    <img src="https://cdn2.dontpayfull.com/media/logos/w/ethicalsuperstore.com.jpg?v=20170515151044724658" data-original="https://cdn2.dontpayfull.com/media/logos/w/ethicalsuperstore.com.jpg?v=20170515151044724658" class="img-responsive lazy-load" alt="ethicalsuperstore.com coupons">
                    <a class="flex-stores-description" style="background-color:#065D78" href="/at/ethicalsuperstore.com">
                        Ethical Superstore Coupons
                    </a>
                </div>
                <span class="view-more">View More</span>
            </div>
        </div>
        <div class="sidebar-menu-box clearfix">
            <h3 class="title">Related Stores</h3>
            <div class="content">
                <p class="listing-item">
                    <a href="/at/tesco.com">
                        Tesco
                    </a>
                </p>
                <p class="listing-item">
                    <a href="/at/argos.co.uk">
                        Argos UK
                    </a>
                </p>
                <p class="listing-item">
                    <a href="/at/gumtree.com">
                        Gumtree
                    </a>
                </p>
                <p class="listing-item">
                    <a href="/at/johnlewis.com">
                        John Lewis
                    </a>
                </p>
                <p class="listing-item">
                    <a href="/at/very.co.uk">
                        Very UK
                    </a>
                </p>
                <p class="listing-item">
                    <a href="/at/debenhams.com">
                        Debenhams
                    </a>
                </p>
                <p class="listing-item">
                    <a href="/at/houseoffraser.co.uk">
                        House of Fraser UK
                    </a>
                </p>
                <p class="listing-item">
                    <a href="/at/ebay.com">
                        eBay
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/asos.com">
                        Asos
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/zalando.co.uk">
                        Zalando
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/next.co.uk">
                        Next
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/preloved.co.uk">
                        Preloved
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/etsy.com">
                        Etsy
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/aliexpress.com">
                        AliExpress
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/sportsdirect.com">
                        Sports Direct
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/currys.co.uk">
                        Currys PC World
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/asda.com">
                        Asda
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/homebase.co.uk">
                        Homebase UK
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/diy.com">
                        B&amp;Q
                    </a>
                </p>
                <p class="listing-item ls-hidden">
                    <a href="/at/screwfix.com">
                        Screwfix
                    </a>
                </p>
                <span class="view-more">View More</span>
            </div>
        </div>
        <div class="sidebar-menu-box clearfix">
            <h3 class="title">About Amazon UK Store</h3>
            <div class="content">
                <div class="store-description">Online retailer of books, movies, music and games along with electronics, toys, apparel, sports, tools, groceries and general home and garden items.</div>
            </div>
            <div class="content">
                <table class="store_offers">
                    <tbody>
                    <tr>
                        <td>Total Offers</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Coupon Codes</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td>Free Shipping Deals</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Average Savings</td>
                        <td>£10</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="sidebar-menu-box clearfix">
            <h3 class="title">Featured Blog Posts</h3>
            <div class="content">
                <div data-href="" class="dpf-image sidebar__blog-post">
                    <a href="https://www.dontpayfull.com/blog/how-to-save-money" target="_BLANK" style="display: block">
                        <img src="/static/images/blogposts/money-saving-tips.png" data-original="/static/images/blogposts/money-saving-tips.png" class="sidebar__image img-responsive lazy-load" alt="How To Save Money" style="">
                    </a>
                </div>
                <div data-href="" class="dpf-image sidebar__blog-post">
                    <a href="https://www.dontpayfull.com/blog/top-10-cheapest-travel-destinations-from-around-the-world" target="_BLANK" style="display: block">
                        <img src="/static/images/blogposts/cheapest-travel-destinations.png" data-original="/static/images/blogposts/cheapest-travel-destinations.png" class="sidebar__image img-responsive lazy-load" alt="Cheapest Travel Destinations" style="">
                    </a>
                </div>
                <div data-href="" class="dpf-image sidebar__blog-post">
                    <a href="https://www.dontpayfull.com/blog/secret-shopping-tricks" target="_BLANK" style="display: block">
                        <img src="/static/images/blogposts/best-time-to-buy-anything.png" data-original="/static/images/blogposts/best-time-to-buy-anything.png" class="sidebar__image img-responsive lazy-load" alt="Best Time To Buy Anything" style="">
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-box clearfix">
            <span class="dpf-link more coupon-images-more">View Store Gallery</span>
            <div class="coupon-images" style="display: none;">
                <div class="description">
                    <img data-original="https://media.dontpayfull.com/media/deals/amazon-uk-coupon-code.jpg" alt="Amazon UK coupon code" class="img-responsive lazy-load" src="https://media.dontpayfull.com/media/deals/amazon-uk-coupon-code.jpg">
                </div>
                <div class="description">
                    <img data-original="https://media.dontpayfull.com/media/deals/amazon-uk-promo-code.jpg" alt="Amazon UK promo code" class="img-responsive lazy-load" src="https://media.dontpayfull.com/media/deals/amazon-uk-promo-code.jpg">
                </div>
                <div class="description">
                    <img data-original="https://media.dontpayfull.com/media/deals/amazon-uk-coupon.jpg" alt="Amazon UK coupon" class="img-responsive lazy-load" src="https://media.dontpayfull.com/media/deals/amazon-uk-coupon.jpg">
                </div>
                <div class="description">
                    <img data-original="https://media.dontpayfull.com/media/deals/amazon-uk-coupons.jpg" alt="Amazon UK coupons" class="img-responsive lazy-load" src="https://media.dontpayfull.com/media/deals/amazon-uk-coupons.jpg">
                </div>
                <div class="description">
                    <img data-original="https://media.dontpayfull.com/media/deals/amazon-uk-deals.jpg" alt="Amazon UK deals" class="img-responsive lazy-load" src="https://media.dontpayfull.com/media/deals/amazon-uk-deals.jpg">
                </div>
            </div>
        </div>
        <div class="sidebar-newsletter-box clearfix">
            <form id="newsletter_side" method="post" action="/newsletter/subscribe" _lpchecked="1">
                <p class="sidebar__box-heading">Subscribe!</p>
                <p class="sidebar__box-text">Get our top coupon codes directly to your inbox.</p>
                <input type="text" class="form-control email label-effect-type" required="" autocomplete="off" name="email" value="Enter your email address" onfocus="if (this.value == 'Enter your email address') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your email address';}">
                <button class="sidebar__box-input--btn" href="#users_news_store_first">Subscribe</button>
                <input type="hidden" name="dkCrftoe" value="06ebf8816ba31c920831af317a121f94ce852fdf"></form>
        </div>
    </div>
    <!-- end menu left -->
@endsection
