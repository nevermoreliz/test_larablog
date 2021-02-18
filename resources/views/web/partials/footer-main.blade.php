<footer class="bg-dark text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="row">
        <div class="col-md-12 py-%">
            <div class="mb-5 flex-center">
                {{-- facebook --}}
                <a class="fb-ic">
                    <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © {{ date('Y') }} Copyright:
        <router-link class="text-white" to="/">laraBlog</router-link>
        <router-link class="text-white" :to="{ name:'contact'}"><u>Contacto</u></router-link>
    </div>
    <!-- Copyright -->
</footer>
