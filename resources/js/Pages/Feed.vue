<script setup lang="ts">
import { ref } from "vue";
import Layout from "@/Layouts/Layout.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Head, Link } from "@inertiajs/vue3";

// Define a reactive array to hold the image names
const imageNames = ref([
    "/images/ibsl_ad.jpeg",
    "/images/ads/ad1.jpeg",
    "/images/ads/ad2.jpeg",
    "/images/ads/ad3.jpeg",
    "/images/ads/ad4.jpeg",
    "/images/ads/ad5.jpeg",
    "/images/ads/ad6.jpeg",
    "/images/ads/ad7.jpeg",
]);
</script>

<template>
    <Head title="Timeline" />
    <Layout>
        <div class="mt-6 grid grid-cols-1 gap-2 sm:grid-cols-2">
            <div v-for="(image, index) in imageNames" :key="index">
                <img class="rounded-2xl shadow" :src="image" alt="" />
            </div>
            <div
                class="container mx-auto rounded-2xl border-4 border-gray-800 bg-white p-4 shadow"
            >
                <img src="/images/ads/article1.jpg" alt="" />

                <h1 class="mb-4 text-4xl font-bold">
                    Begin a Lifelong Investment in Your Education!
                </h1>
                <p class="mb-4">First Step Learn brings education for all!</p>
                <p class="mb-4">
                    Are you ready to embark on an exciting journey toward a
                    fulfilling career in the rapidly growing care industry? If
                    you’re seeking a flexible learning opportunity that
                    perfectly fits your busy lifestyle, look no further! At
                    First Step Learn, we offer a gateway to internationally
                    recognized qualifications that will unlock a world of
                    thrilling career opportunities in Adult Care, Health and
                    Social Care, Childcare, and more!
                </p>

                <h2 class="mb-2 text-2xl font-semibold">
                    Why Choose First Step Learn?
                </h2>
                <ol class="mb-4 list-inside list-decimal">
                    <li class="mb-2">
                        <strong
                            >Flexible Learning Options: Tailored for Your
                            Lifestyle!</strong
                        ><br />Study at your own pace with a mix of dynamic
                        online classes and interactive in-person sessions,
                        including weekend classes designed for busy
                        professionals.
                    </li>
                    <li class="mb-2">
                        <strong
                            >Accelerate Your Journey: HND Courses in Just 9
                            Months!</strong
                        ><br />Fast-track your education with HND courses
                        available in as little as 9 months, allowing you to
                        enter the job market sooner with an internationally
                        recognized qualification.
                    </li>
                    <li class="mb-2">
                        <strong
                            >Diverse Course Offerings: Ignite Your
                            Passion!</strong
                        ><br />Explore a wide range of courses across multiple
                        levels—from Level 3 Diplomas to HNDs—ensuring there's a
                        perfect fit for everyone.
                    </li>
                    <li class="mb-2">
                        <strong
                            >Affordable Payment Plans: Quality Education for
                            Everyone!</strong
                        ><br />Take advantage of flexible installment options
                        and customized payment plans that make quality education
                        accessible for all.
                    </li>
                    <li class="mb-2">
                        <strong
                            >Practical, Career-Focused Learning: Skills for
                            Success!</strong
                        ><br />Gain real-world experience through practical
                        training programs, learning from industry experts who
                        equip you with essential skills to thrive in your
                        career.
                    </li>
                </ol>

                <img src="/images/ads/article2.jpg" alt="" />

                <h2 class="mb-2 text-2xl font-semibold">
                    Our Mission in Sri Lanka: Elevating Care Standards through
                    Quality Education
                </h2>
                <p class="mb-4">
                    At First Step Learn, the mission is clear: to enhance the
                    quality of care in Sri Lanka by offering comprehensive care
                    courses that emphasize practical training. We are dedicated
                    to empowering individuals with the knowledge and skills
                    necessary to excel in the care sector. With a focus on high
                    standards and practical experience, we aim to produce
                    well-rounded professionals ready to make a difference. First
                    Step Learn not only provides quality education but also
                    opens doors to job opportunities in both Sri Lanka and the
                    UK, helping to raise the overall standards of care through
                    dedicated training.
                </p>

                <h2 class="mb-2 text-2xl font-semibold">
                    The Growing Demand for Care Professionals: Seize the
                    Opportunity!
                </h2>
                <p class="mb-4">
                    The demand for skilled care workers is skyrocketing, not
                    just in Sri Lanka but globally, as the population ages and
                    the number of elderly individuals continues to rise. Now is
                    the perfect time to invest in a career that truly makes a
                    difference. By earning a qualification from First Step
                    Learn, you'll be equipped to meet this growing need and
                    contribute to a healthier, more supportive community.
                    Imagine stepping into a profession where your skills and
                    compassion can create a positive change in people's lives!
                </p>

                <h2 class="mb-2 text-2xl font-semibold">What Awaits You?</h2>
                <p class="mb-4">
                    Choosing First Step Learn is a gateway to a rewarding career
                    in the thriving care sector. Here’s what students can
                    expect:
                </p>
                <ol class="mb-4 list-inside list-decimal">
                    <li class="mb-2">
                        <strong
                            >Recognized Qualifications: Your Key to
                            Success</strong
                        ><br />Graduates receive internationally recognized
                        qualifications that enhance employability and boost
                        confidence, preparing them to make a positive impact in
                        their communities.
                    </li>
                    <li class="mb-2">
                        <strong
                            >Hands-On Experience: Bridging Theory and
                            Practice</strong
                        ><br />The programs emphasize practical training,
                        ensuring that students gain valuable real-world
                        experience. Through placements, learners will be
                        well-equipped to face the challenges of their careers.
                    </li>
                    <li class="mb-2">
                        <strong
                            >Career Opportunities: A Pathway to Professional
                            Growth</strong
                        ><br />With the growing demand for skilled professionals
                        in care, graduates will find abundant job opportunities
                        in care homes across Sri Lanka. After gaining just one
                        year of experience, there's also the exciting
                        possibility of working in the UK, expanding their career
                        horizons.
                    </li>
                </ol>

                <h2 class="mb-2 text-2xl font-semibold">
                    Our Promise – Education That Transforms Lives
                </h2>
                <p class="mb-4">
                    At First Step Learn, we believe that education should
                    empower, inspire, and transform. That’s why we’ve designed
                    our programs to equip students with not just theoretical
                    knowledge but also the practical skills they need to thrive
                    in the real world.
                </p>
                <p class="mb-4">
                    We understand the importance of work-life balance, which is
                    why our courses are structured to fit into your schedule,
                    not the other way around. Whether you’re a school leaver, a
                    working professional, or someone looking to change careers,
                    our flexible schedules make it possible for anyone to
                    succeed.
                </p>

                <h2 class="mb-2 text-2xl font-semibold">How to Get Started</h2>
                <p class="mb-4">
                    Ready to embark on this exciting journey? First Step Learn
                    is here to help every step of the way. Fill out a simple
                    form to learn more about the courses offered at First Step
                    Learn.
                </p>
                <p class="mb-4">
                    <a
                        href="https://docs.google.com/forms/d/1yAiROjQ67vQknydQvVxkikchYAtiOdddko9aaiVFIp4/edit"
                        class="text-blue-500 underline"
                        >Fill out the form here.</a
                    >
                </p>
                <p class="mb-4">For assistance, reach out to us:</p>
                <p class="mb-4">
                    📞 Phone/ Whatsapp: +44 7727229780<br />🌐 Website:
                    <a
                        href="http://www.firststep-learn.co.uk"
                        class="text-blue-500 underline"
                        >www.firststep-learn.co.uk</a
                    ><br />✉️ Email:
                    <a
                        href="mailto:info@firststep-learn.co.uk"
                        class="text-blue-500 underline"
                        >info@firststep-learn.co.uk</a
                    >
                </p>
                <p class="mb-4">Follow us on social media for updates:</p>
                <p class="mb-4">
                    Instagram UK:
                    <a
                        href="https://www.instagram.com/firststeplearn?igsh=MWhpbXdlaDNmdGt0aA=="
                        class="text-blue-500 underline"
                        >https://www.instagram.com/firststeplearn?igsh=MWhpbXdlaDNmdGt0aA==</a
                    ><br />Instagram Sri Lanka:
                    <a
                        href="https://www.instagram.com/firststeplearn_sl/"
                        class="text-blue-500 underline"
                        >https://www.instagram.com/firststeplearn_sl/</a
                    ><br />Facebook:
                    <a
                        href="https://www.facebook.com/firststeplearn?mibextid=ZbWKwL"
                        class="text-blue-500 underline"
                        >https://www.facebook.com/firststeplearn?mibextid=ZbWKwL</a
                    >
                </p>
                <p class="mb-4">
                    Don’t wait! Fill out the form today and take your first step
                    toward a rewarding career!
                </p>
            </div>
        </div>
    </Layout>
</template>
