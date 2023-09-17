<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/about</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/digital-marketing-agency-in-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/affiliate-marketing-agency</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/content-creation-service</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/email-marketing-agency</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/search-engine-marketing-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/seo-agency-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/social-media-marketing-agency</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/graphic-design-services</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/brand-agency-london</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/web-design-agency-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/ui-ux-design-agency</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/programming-and-tech</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/ecommerce-development-agency-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/mobile-app-development-company</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/shopify-agency-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/programming-services</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/cms-website-development-services</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/wix-services-agency-in-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/wordpress-services-agency-in-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/social-media-marketing-agency</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/article-writing-agency-in-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/proofreading-agency-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/cover-letter-services-agency-in-uk</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/blogs</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>

        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/') }}/blogs/{{ $post->meta_slug }}</loc>
            <lastmod>{{date("Y-m-d")}}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @php
    $categories = array();


    foreach ($posts as $post) {
    $categories[] = $post->category;
    }

    $categories = array_unique($categories);

    @endphp

    @foreach ($categories as $category)
    <url>
        <loc>{{ url('/') }}/categories/{{ $category}}</loc>
        <lastmod>{{date("Y-m-d")}}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
</urlset>
