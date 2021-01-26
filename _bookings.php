<?php include '_header.php'; ?>

<div class="main-bookings">
    <h2>Book a Cruise</h2>

    <form>
        <label class="label-bookings">
            Full Name
            <input type="text" id="full-name" required>
        </label>
        <label class="label-bookings">
            Address
            <input type="text" id="address" required>
        </label>
        <label class="label-bookings">
            City
            <input type="text" id="city" required>
        </label>
        <label class="label-bookings">
            State
            <select>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
        </label>
        <label class="label-bookings">
            Zipcode
            <input type="number" id="zip" required>
        </label>
        <label class="label-bookings">
            Phone Number
            <input type="phone" id="phone" required>
        </label>
        <label class="label-bookings">
            Email Address
            <input type="email" id="email" required>
        </label>
        <label class="label-bookings">
            Cruise Selection
            <select>
                <option id="default" selected="selected">Please Select...</option>
                <option value="Alaska">Alaska for $599</option>
                <option value="Mexico">Mexico for $499</option>
                <option value="Caribbean">Caribbean for $699</option>
            </select>
        </label>
        <button type="submit">Book My Cruise</button>
    </form>
</div>


<?php  include '_footer.php'; ?>