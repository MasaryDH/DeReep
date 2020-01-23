{{-- Cover --}}
<div class="cover container">
    <h1>Wonen in een nieuwe buurt</h1>
    <button class="button">Contacteer ons</button>
    <section class="info">
        <article class="infoDiv">
            <p class="infoDiv-kop">Adres</p>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
        </article>
        <article class="infoDiv">
            <p class="infoDiv-kop">Prijs</p>
            <p>Vanaf € 450.000</p>
        </article>
    </section>
</div>

{{-- Section 1 --}}
<div class="container section1" id="Section1">
    <section class="section-dereep">
        <article>
            <h2>De Reep</h2>
            <p class="section-dereep-tekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis augue eget leo dapibus, vitae interdum lectus vehicula. Aenean velit diam, condimentum in scelerisque a, dignissim nec enim. Nam eget sapien sed nibh efficitur lacinia vulputate et ante. Praesent cursus elit ut urna venenatis volutpat. Maecenas pellentesque a purus et placerat. Pellentesque efficitur. Lorem ipsum<br><br>
                Dolor sit amet, consectetur adipiscing elit. Praesent convallis augue eget leo dapibus, vitae interdum lectus vehicula. Aenean velit diam, condimentum in scelerisque a, dignissim nec enim. Nam eget sapien sed nibh efficitur lacinia vulputate et ante. Praesent cursus elit ut urna venenatis volutpat. Maecenas pellentesque a purus et placerat. Pellentesque efficitur.
            </p>
            <table width="50%">
               <tr>
                   <td>
                       <img src="{{ URL::asset('img/icons/full-screen.svg') }}">
                       <p class="tableName">Totale Opp.</p>
                       <p class="tableValue">000</p>
                   </td>
                   <td>
                       <img src="{{ URL::asset('img/icons/house.svg') }}">
                       <p class="tableName">Bewoonbare Opp.</p>
                       <p class="tableValue">000</p>
                   </td>
                   <td>
                       <img src="{{ URL::asset('img/icons/bed.svg') }}">
                       <p class="tableName">Slaapkamers</p>
                       <p class="tableValue">000</p>
                   </td>
                   <td>
                       <img src="{{ URL::asset('img/icons/bathtub.svg') }}">
                       <p class="tableName">Badkamers</p>
                       <p class="tableValue">000</p>
                   </td>
               </tr>
            </table>
        </article>
        <article class="section-dereep-side">
            <p class="section-dereep-sideinfo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis augue eget leo dapibus, vitae interdum lectus vehicula.</p>
            <img>
        </article>
    </section>
</div>

{{-- Section 2 --}}
<div class="container section2" id="Section2">
    <div class="section2-kop">
        <h2>Troeven project</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis augue eget leo dapibus, vitae interdum lectus vehicula.</p>
    </div>
    <section class="section-troevenproject">
        <article>
            <img src="{{ URL::asset('img/istockphoto-1078076590-2048x2048.jpg') }}">
            <span>
                <h3>Troeven 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
            </span>
        </article>
        <article>
            <img src="{{ URL::asset('img/istockphoto-1039931960-2048x2048.jpg') }}">
            <span>
                <h3>Troeven 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
            </span>
        </article>
        <article>
            <img src="{{ URL::asset('img/istockphoto-1097881662-2048x2048.jpg') }}">
            <span>
                <h3>Troeven 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
            </span>
        </article>
    </section>
</div>

{{-- Section 3 --}}
<div class="container section3" id="Section3">
    <span>
        <h2>De Reep uitgelicht</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis augue eget leo dapibus, vitae interdum lectus vehicula. Aenean velit diam, condimentum in scelerisque a, dignissim nec enim. Nam eget sapien sed nibh efficitur lacinia vulputate et ante. Praesent cursus elit ut urna venenatis volutpat. Maecenas pellentesque a purus et placerat. Pellentesque efficitur. Lorem.</p>
        <button class="button">Contacteer ons</button>
    </span>
    <img src="{{ URL::asset('img/20170315_05_S.jpg') }}">
</div>

{{-- Section 4 --}}
<div class="container section4">
    <section class="section-huis">
        <article>
            <img src="{{ URL::asset('img/Interieurbeelden (8)V3.jpg') }}">
            <h2>no. 9</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis augue eget leo dapibus, vitae interdum lectus vehicula. Aenean velit diam, condimentum in scelerisque a, dignissim nec enim. Nam eget sapien sed nibh efficitur lacinia vulputate et ante. Praesent cursus elit ut urna venenatis volutpat. Maecenas pellentesque a purus et placerat. Pellentesque efficitur. Lorem ipsum
                Dolor sit amet, consectetur adipiscing elit. Praesent convallis augue eget leo dapibus, vitae interdum lectus vehicula. Aenean velit diam, condimentum in scelerisque a, dignissim nec enim. Nam eget sapien sed nibh efficitur lacinia vulputate et ante. Praesent cursus elit ut urna venenatis volutpat. Maecenas pellentesque a purus et placerat. Pellentesque efficitur.
            </p>
            <button class="button">Download Plan</button>
            <button class="button">Contacteer Ons</button>
        </article>
    </section>
</div>

{{-- Contact --}}
<div class="container contact" id="Contact">
    <h2>Contacteer ons</h2>
    <form>
        <input placeholder="Naam">
        <input placeholder="Emailadres">
        <input placeholder="Telefoonnummer">
        <textarea placeholder="Bericht"></textarea>
        <button class="button">Verzend</button>
    </form>
    <img src="{{ URL::asset('img/stock-photo-happy-young-family-spending-time-together-outside-in-green-nature-247460536.jpg') }}">
</div>
