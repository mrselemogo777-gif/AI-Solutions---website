<?php include 'includes/config.php'; include 'includes/header.php'; ?>

<h1 class="mb-4">Radiology Case Studies</h1>
<p class="lead mb-5">Real results from real radiology departments.</p>

<div class="d-flex justify-content-between mb-4">
    <button id="prevCaseBtn" class="btn btn-outline-secondary">← Previous Case</button>
    <button id="nextCaseBtn" class="btn btn-outline-secondary">Next Case →</button>
</div>

<div class="row" id="caseStudiesContainer">
    <!-- Case 1 -->
    <div class="col-12 mb-5 case-item">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <img src="assets/images/case-studies/case1.jpg" class="img-fluid rounded" alt="Gaborone Private Hospital" style="width: 100%; max-height: 300px; object-fit: cover;">
                    <h2 class="mt-3">Gaborone Private Hospital</h2>
                    <p class="text-muted">Triage Software</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">The Challenge</h4>
                            <p>The radiology department was overwhelmed with routine scans, causing delays in reading urgent cases like possible strokes and trauma.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">Our Solution</h4>
                            <p>We deployed a triage system that analyses each study on arrival and flags critical findings for immediate review. The system integrates with their existing PACS.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">Key Outcomes</h4>
                            <p><strong>Faster urgent case reads</strong><br>Reduced backlog<br><strong>Improved radiologist satisfaction</strong></p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="contact.php?subject=Gaborone%20Private%20Triage%20Case%20Study" class="btn btn-primary">Discuss similar solution →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Case 2 -->
    <div class="col-12 mb-5 case-item">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <img src="assets/images/case-studies/casie2.jpeg" class="img-fluid rounded" alt="Princess Marina Hospital" style="width: 100%; max-height: 300px; object-fit: cover;">
                    <h2 class="mt-3">Princess Marina Hospital</h2>
                    <p class="text-muted">Lesion Detection Software</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">The Challenge</h4>
                            <p>Radiologists were missing small lung nodules on CT scans, leading to delayed cancer diagnoses and patient anxiety.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">Our Solution</h4>
                            <p>We implemented a detection module that highlights suspicious nodules, measures growth over time, and integrates with the reporting system.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">Key Outcomes</h4>
                            <p><strong>Fewer missed nodules</strong><br>Faster reads<br><strong>High radiologist adoption</strong></p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="contact.php?subject=City%20Imaging%20Lesion%20Detection" class="btn btn-primary">Explore lesion detection →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Case 3 -->
    <div class="col-12 mb-5 case-item">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <img src="assets/images/case-studies/casii3.jpg" class="img-fluid rounded" alt="Nyangabgwe Hospital" style="width: 100%; max-height: 300px; object-fit: cover;">
                    <h2 class="mt-3">Nyangabgwe Hospital</h2>
                    <p class="text-muted">Workflow Optimisation Software</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">The Challenge</h4>
                            <p>Uneven workload distribution caused burnout among radiologists and long wait times for referring physicians.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">Our Solution</h4>
                            <p>We deployed a workflow engine that auto‑assigns studies based on subspecialty, current workload, and estimated read time.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">Key Outcomes</h4>
                            <p><strong>Higher throughput</strong><br>Less overtime<br><strong>Shorter turnaround</strong></p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="contact.php?subject=Francistown%20Workflow%20Case%20Study" class="btn btn-primary">Optimise your workflow →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Case 4 -->
    <div class="col-12 mb-5 case-item">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <img src="assets/images/case-studies/casii4.jpeg" class="img-fluid rounded" alt="Sekgoma Memorial Hospital" style="width: 100%; max-height: 300px; object-fit: cover;">
                    <h2 class="mt-3">Sekgoma Memorial Hospital</h2>
                    <p class="text-muted">Reporting Software</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">The Challenge</h4>
                            <p>Radiologists spent too much time typing reports, leading to burnout and delays in finalising studies.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">Our Solution</h4>
                            <p>We introduced reporting software that generates structured draft reports from voice input and structured data.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h4 class="text-primary">Key Outcomes</h4>
                            <p><strong>Faster reporting</strong><br>Less typing<br><strong>High acceptance rate</strong></p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="contact.php?subject=UB%20Reporting%20Case%20Study" class="btn btn-primary">Learn about reporting software →</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const caseItems = document.querySelectorAll('.case-item');
    let currentIndex = 0;
    function showCase(index) {
        if (index < 0) index = 0;
        if (index >= caseItems.length) index = caseItems.length - 1;
        caseItems.forEach((item, i) => { item.style.display = i === index ? 'block' : 'none'; });
        currentIndex = index;
    }
    document.getElementById('prevCaseBtn').addEventListener('click', () => { showCase(currentIndex - 1); window.scrollTo({ top: 0, behavior: 'smooth' }); });
    document.getElementById('nextCaseBtn').addEventListener('click', () => { showCase(currentIndex + 1); window.scrollTo({ top: 0, behavior: 'smooth' }); });
    showCase(0);
</script>

<?php include 'includes/page-nav.php'; include 'includes/footer.php'; ?>
