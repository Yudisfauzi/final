<x-layout>
    <section>
        <div class="container-post">
            <div class="wrap">
                <div class="artikel">
                    <div class="tittle-art">
                        <h3>{{ $post['tittle'] }}</h3>
                    </div>
                    <ul class="media-pt">
                        <li>
                            <a href="#">
                                <i data-feather="calendar"></i>
                            </a>
                            <h5>{{ $post['author'] }}</h5>{{ $post->created_at->format('j F Y') }}
                        </li>
                    </ul>
                    <hr>
                    <div class="info-desc">
                        <p>{{ $post['body'] }}</p>
                    </div>
                </div>
                <a href="/posts">
                    selengkapnya
                </a>
            </div>
        </div>
    </section>
</x-layout>