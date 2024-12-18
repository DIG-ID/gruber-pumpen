<section class="section-intro flex items-end bg-black  text-blue-shade-1 min-h-[464px] mt-32 relative py-32 px-8">
    <?php
    $intro_video = get_field('intro_video');
    if ($intro_video):
        $video_url = esc_url($intro_video);
        ?>
        <video class="absolute inset-0 w-full h-full object-cover z-40" autoplay muted loop playsinline>
            <source src="<?php echo $video_url; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    <?php endif; ?>
    <div class="relative">
        <div class="flex flex-col w-full mx-24">
            <div class="flex items-center gap-4  invisible fade-in--noscroll">
                <?php
                $intro_eyebrow = get_field('intro_eyebrow');
                if ($intro_eyebrow): ?>
                    <h4 class="text-orange-shade-1 uppercase"><?php echo $intro_eyebrow; ?></h4>
                <?php endif; ?>
                <hr class="border border-orange-shade-1  w-[4.5rem]" />
            </div>
            <div class="page-header--title max-w-[60%]  invisible fade-in--noscroll">
                <?php
                $intro_title = get_field('intro_title');
                if ($intro_title): ?>
                    <h1 class="page-header--title py-4"><?php echo $intro_title; ?></h1>
                <?php endif; ?>
            </div>

            <div class="page-header--description invisible fade-in--noscroll w-1/3 pt-4">
                <?php
                $intro_description = get_field('intro_description');
                if ($intro_description):
                    ?>
                    <p class="page-header--desc"><?php echo $intro_description; ?></p>
                    <?php
                endif;
                ?>
            </div>

            <div class="flex gap-6 mt-10 invisible fade-in--noscroll">
                <?php
                $know_more_link = get_field('intro_know_more_link');
                $contact_link = get_field('intro_contact_link');

                if ($know_more_link):
                    $know_more_link_target = $know_more_link['target'] ? $know_more_link['target'] : '_self';
                    ?>
                    <a class="btn--secundary uppercase" href="<?php echo esc_url($know_more_link['url']); ?>"
                        target="<?php echo esc_attr($know_more_link_target); ?>"><?php echo esc_html($know_more_link['title']); ?></a>
                    <?php
                endif;

                if ($contact_link):
                    $contact_link_target = $contact_link['target'] ? $contact_link['target'] : '_self';
                    ?>
                    <a class="btn--primary uppercase" href="<?php echo esc_url($contact_link['url']); ?>"
                        target="<?php echo esc_attr($contact_link_target); ?>"><?php echo esc_html($contact_link['title']); ?></a>
                    <?php
                endif;
                ?>
            </div>

        </div>
    </div>

    <div class="hidden lg:block absolute right-60 bottom-10 invisible fade-in--noscroll">
        <svg width="220" height="108" viewBox="0 0 220 108" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_1144_13929)">
                <rect x="17" y="17.7217" width="186" height="56.3833" rx="10.3693" fill="#0D6394" />
            </g>
            <g filter="url(#filter1_d_1144_13929)">
                <rect x="112.269" y="8" width="75.1777" height="75.1777" rx="10.3693" fill="#D3594A" />
            </g>
            <path
                d="M38.9829 61.8113C38.0919 61.8113 37.3439 61.6518 36.7389 61.3328C36.1449 61.0138 35.6939 60.5793 35.3859 60.0293C35.0889 59.4683 34.9459 58.8413 34.9569 58.1483H35.7324C35.7324 58.6873 35.8424 59.1878 36.0624 59.6498C36.2934 60.1008 36.6454 60.4638 37.1184 60.7388C37.6024 61.0138 38.2184 61.1513 38.9664 61.1513C39.6484 61.1513 40.2039 61.0413 40.6329 60.8213C41.0729 60.6013 41.4029 60.3043 41.6229 59.9303C41.8429 59.5563 41.9529 59.1383 41.9529 58.6763C41.9529 58.1153 41.8264 57.6698 41.5734 57.3398C41.3314 56.9988 41.0069 56.7238 40.5999 56.5148C40.2039 56.3058 39.7584 56.1298 39.2634 55.9868C38.7794 55.8328 38.3009 55.6678 37.8279 55.4918C37.0579 55.2168 36.4694 54.8703 36.0624 54.4523C35.6554 54.0233 35.4519 53.4568 35.4519 52.7528C35.4519 52.2138 35.5784 51.7298 35.8314 51.3008C36.0954 50.8608 36.4804 50.5143 36.9864 50.2613C37.4924 49.9973 38.1084 49.8653 38.8344 49.8653C39.5054 49.8653 40.0994 49.9863 40.6164 50.2283C41.1334 50.4703 41.5404 50.8223 41.8374 51.2843C42.1344 51.7353 42.2829 52.2963 42.2829 52.9673H41.4909C41.4909 52.4503 41.3809 52.0103 41.1609 51.6473C40.9519 51.2843 40.6439 51.0093 40.2369 50.8223C39.8409 50.6243 39.3679 50.5253 38.8179 50.5253C38.2349 50.5253 37.7509 50.6243 37.3659 50.8223C36.9809 51.0093 36.6949 51.2678 36.5079 51.5978C36.3209 51.9168 36.2274 52.2853 36.2274 52.7033C36.2274 53.1763 36.3429 53.5558 36.5739 53.8418C36.8049 54.1278 37.1129 54.3643 37.4979 54.5513C37.8939 54.7273 38.3339 54.8923 38.8179 55.0463C39.3019 55.2003 39.7969 55.3763 40.3029 55.5743C40.7649 55.7613 41.1774 55.9813 41.5404 56.2343C41.9144 56.4873 42.2059 56.8063 42.4149 57.1913C42.6349 57.5763 42.7449 58.0603 42.7449 58.6433C42.7449 59.2153 42.6074 59.7433 42.3324 60.2273C42.0574 60.7003 41.6394 61.0853 41.0784 61.3823C40.5284 61.6683 39.8299 61.8113 38.9829 61.8113ZM44.75 61.6133V50.0633H51.5315V50.6903H45.4925V55.5083H51.0365V56.1518H45.4925V60.9863H51.5315V61.6133H44.75ZM53.7734 61.6133V50.0633H57.0074C57.8984 50.0633 58.6189 50.2063 59.1689 50.4923C59.7299 50.7783 60.1369 51.1688 60.3899 51.6638C60.6539 52.1588 60.7859 52.7198 60.7859 53.3468C60.7859 53.9848 60.6539 54.5568 60.3899 55.0628C60.1259 55.5578 59.7134 55.9483 59.1524 56.2343C58.6024 56.5093 57.8709 56.6468 56.9579 56.6468H54.5159V61.6133H53.7734ZM60.0269 61.6133L57.3539 56.3663H58.2119L60.9179 61.6133H60.0269ZM54.5159 56.0363H56.9744C57.9754 56.0363 58.7289 55.8053 59.2349 55.3433C59.7519 54.8813 60.0104 54.2158 60.0104 53.3468C60.0104 52.4998 59.7574 51.8508 59.2514 51.3998C58.7454 50.9378 57.9864 50.7068 56.9744 50.7068H54.5159V56.0363ZM66.1042 61.6133L61.6327 50.0633H62.4412L66.5332 60.7718L70.6582 50.0633H71.4667L66.9622 61.6133H66.1042ZM73.1255 61.6133V50.0633H73.868V61.6133H73.1255ZM81.3131 61.8113C80.2241 61.8113 79.2726 61.5638 78.4586 61.0688C77.6556 60.5628 77.0341 59.8643 76.5941 58.9733C76.1541 58.0713 75.9341 57.0263 75.9341 55.8383C75.9341 54.6503 76.1541 53.6108 76.5941 52.7198C77.0341 51.8178 77.6556 51.1193 78.4586 50.6243C79.2726 50.1183 80.2241 49.8653 81.3131 49.8653C82.5781 49.8653 83.5956 50.1568 84.3656 50.7398C85.1356 51.3118 85.6416 52.1258 85.8836 53.1818H85.0586C84.8606 52.3898 84.4536 51.7518 83.8376 51.2678C83.2326 50.7838 82.3911 50.5418 81.3131 50.5418C80.4001 50.5418 79.5971 50.7508 78.9041 51.1688C78.2221 51.5868 77.6831 52.1918 77.2871 52.9838C76.9021 53.7758 76.7096 54.7273 76.7096 55.8383C76.7096 56.9493 76.9021 57.9008 77.2871 58.6928C77.6831 59.4738 78.2221 60.0788 78.9041 60.5078C79.5971 60.9258 80.4001 61.1348 81.3131 61.1348C82.3801 61.1348 83.2216 60.8928 83.8376 60.4088C84.4646 59.9138 84.8716 59.2703 85.0586 58.4783H85.8836C85.6416 59.5343 85.1356 60.3538 84.3656 60.9368C83.5956 61.5198 82.5781 61.8113 81.3131 61.8113ZM87.9497 61.6133V50.0633H94.7312V50.6903H88.6922V55.5083H94.2362V56.1518H88.6922V60.9863H94.7312V61.6133H87.9497Z"
                fill="#F0F7FA" />
            <path
                d="M36.9926 47L42.5082 33.0661H45.5004L40.1412 47H36.9926ZM34.8266 33.9369V31.302H45.5004V33.0661L44.3615 33.9369H34.8266ZM54.0838 47L51.2479 42.6233L50.645 42.1767L46.447 36.2146H49.9081L52.5207 40.167L53.079 40.5913L57.5226 47H54.0838ZM46.2237 47L50.6227 40.8369L52.2974 42.8243L49.5285 47H46.2237ZM53.1906 42.1544L51.4712 40.1893L54.0392 36.2146H57.3217L53.1906 42.1544ZM58.314 45.2583L64.2314 39.0728C64.6482 38.6262 64.9832 38.2318 65.2363 37.8894C65.5042 37.5321 65.6977 37.1971 65.8168 36.8845C65.9359 36.557 65.9955 36.2295 65.9955 35.902C65.9955 35.247 65.7796 34.7334 65.3479 34.3612C64.9311 33.9891 64.3877 33.803 63.7178 33.803C63.033 33.803 62.4227 33.9816 61.8868 34.3389C61.3657 34.6962 60.8745 35.2619 60.413 36.036L58.3363 34.2719C58.9615 33.2149 59.7356 32.4185 60.6586 31.8826C61.5965 31.3318 62.6683 31.0564 63.8741 31.0564C64.9013 31.0564 65.7945 31.2573 66.5537 31.6593C67.3278 32.0612 67.9233 32.6195 68.3401 33.334C68.757 34.0486 68.9654 34.8823 68.9654 35.835C68.9654 36.4751 68.8835 37.0557 68.7197 37.5767C68.5709 38.0978 68.3104 38.6188 67.9382 39.1398C67.5809 39.646 67.0822 40.2191 66.4421 40.8592L62.1324 45.2583H58.314ZM58.314 47V45.2583L60.9042 44.3651H69.3003V47H58.314ZM70.6342 41.4622L75.9934 31.302H79.3429L73.8497 41.4622H70.6342ZM70.6342 43.2486V41.4622L71.7507 40.5913H83.005V43.2486H70.6342ZM78.0477 47V36.9962H81.04V47H78.0477ZM92.1048 47V40.8146C92.1048 40.1745 91.9039 39.6534 91.5019 39.2515C91.1 38.8495 90.5789 38.6486 89.9388 38.6486C89.522 38.6486 89.1498 38.7379 88.8223 38.9165C88.4948 39.0952 88.2343 39.3483 88.0408 39.6758C87.8621 40.0033 87.7728 40.3829 87.7728 40.8146L86.634 40.234C86.634 39.3855 86.8126 38.6486 87.1699 38.0233C87.5272 37.3832 88.0184 36.8845 88.6437 36.5272C89.2838 36.1699 90.0133 35.9913 90.832 35.9913C91.6508 35.9913 92.3728 36.1699 92.998 36.5272C93.6382 36.8845 94.1369 37.3758 94.4941 38.001C94.8514 38.6262 95.0301 39.3483 95.0301 40.167V47H92.1048ZM84.8476 47V30.8554H87.7728V47H84.8476Z"
                fill="#F0F7FA" />
            <path
                d="M169.151 44.7973C168.835 39.61 166.867 35.2027 163.249 31.5753C159.631 27.9478 155.238 25.9746 150.07 25.6557V22.9062C153.039 23.0474 155.817 23.7091 158.403 24.8914C160.992 26.0736 163.263 27.6435 165.214 29.6012C167.166 31.5588 168.732 33.8362 169.913 36.4335C171.092 39.029 171.751 41.816 171.892 44.7946L169.151 44.7973ZM158.186 44.7973C157.87 42.6821 156.965 40.8665 155.472 39.3507C153.979 37.8348 152.178 36.9358 150.07 36.6535V33.904C152.948 34.1863 155.397 35.3502 157.419 37.3958C159.44 39.4414 160.609 41.9086 160.927 44.7973H158.186ZM168.751 68.2721C164.129 68.2721 159.391 67.1118 154.538 64.7913C149.684 62.4708 145.167 59.2127 140.985 55.017C136.837 50.8232 133.606 46.3004 131.293 41.4485C128.979 36.5967 127.822 31.8548 127.822 27.2229C127.822 26.398 128.096 25.7015 128.645 25.1333C129.193 24.5651 129.878 24.281 130.7 24.281H137.479C138.225 24.281 138.876 24.5165 139.431 24.9876C139.987 25.4587 140.362 26.0626 140.558 26.7995L141.917 33.3541C142.045 34.124 142.022 34.7958 141.849 35.3695C141.675 35.9432 141.371 36.4134 140.936 36.78L134.922 42.4053C136.048 44.4527 137.291 46.3554 138.653 48.1132C140.014 49.871 141.467 51.5362 143.011 53.1089C144.601 54.7036 146.313 56.1883 148.148 57.563C149.983 58.9359 151.997 60.2318 154.19 61.4507L160.053 55.4652C160.499 54.9831 161 54.6651 161.558 54.5111C162.113 54.359 162.729 54.3287 163.405 54.4204L169.17 55.6027C169.916 55.786 170.52 56.1626 170.985 56.7327C171.449 57.3027 171.681 57.9553 171.681 58.6903V65.3852C171.681 66.21 171.398 66.8974 170.831 67.4473C170.265 67.9972 169.573 68.2721 168.751 68.2721ZM133.639 39.8263L138.902 34.9736C139.076 34.8324 139.189 34.6381 139.242 34.3907C139.297 34.1432 139.288 33.9141 139.215 33.7033L138 27.8745C137.929 27.5941 137.806 27.3833 137.63 27.2421C137.455 27.101 137.225 27.0304 136.942 27.0304H131.317C131.107 27.0304 130.932 27.101 130.791 27.2421C130.65 27.3833 130.58 27.5592 130.58 27.77C130.633 29.6488 130.926 31.6101 131.46 33.6538C131.993 35.6976 132.719 37.7551 133.636 39.8263M156.799 62.7402C158.652 63.6604 160.626 64.3413 162.72 64.7831C164.818 65.223 166.645 65.4585 168.202 65.4897C168.413 65.4897 168.588 65.4191 168.729 65.278C168.869 65.1368 168.94 64.9618 168.94 64.7528V59.2319C168.94 58.9515 168.869 58.7224 168.729 58.5446C168.588 58.3686 168.378 58.2458 168.098 58.1761L163.027 57.1341C162.815 57.0626 162.63 57.0534 162.471 57.1066C162.313 57.1616 162.147 57.2762 161.972 57.4503L156.799 62.7402Z"
                fill="#0E6393" />
            <defs>
                <filter id="filter0_d_1144_13929" x="0.797911" y="9.94468" width="218.404" height="88.787"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dy="8.42509" />
                    <feGaussianBlur stdDeviation="8.10104" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1144_13929" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1144_13929" result="shape" />
                </filter>
                <filter id="filter1_d_1144_13929" x="96.0665" y="0.222998" width="107.582" height="107.582"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dy="8.42509" />
                    <feGaussianBlur stdDeviation="8.10104" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1144_13929" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1144_13929" result="shape" />
                </filter>
            </defs>
        </svg>
    </div>

    </div>
</section>