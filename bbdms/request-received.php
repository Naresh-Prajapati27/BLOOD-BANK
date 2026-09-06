<?php 
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Bank | Emergency Blood Requests</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <style>
        body { background-color: #f8fafc; }
        .request-section { padding: 60px 0; }
        .request-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid #eef2f6;
            box-shadow: 0 8px 24px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
        }
        .request-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        }
        .blood-badge {
            background: linear-gradient(135deg, #ea4335 0%, #dc2626 100%);
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            padding: 8px 16px;
            display: inline-block;
            border-radius: 30px;
            box-shadow: 0 4px 12px rgba(234, 67, 53, 0.25);
        }
        .btn-call {
            background-color: #22c55e !important;
            color: white !important;
            border-radius: 8px;
            font-weight: 600;
            padding: 10px 14px;
            border: none;
            transition: 0.2s;
        }
        .btn-call:hover { background-color: #16a34a !important; transform: scale(1.02); }
        .btn-email {
            background-color: #f1f5f9 !important;
            color: #475569 !important;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            padding: 10px 14px;
        }
        .btn-email:hover { background-color: #e2e8f0 !important; }
        .meta-label { font-size: 0.8rem; color: #94a3b8; font-weight: 600; text-uppercase: uppercase; display: block; }
        .meta-val { font-size: 0.95rem; color: #334155; font-weight: 600; }
    </style>
</head>
<body>
    <?php include('includes/header.php');?>

    <section class="request-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="font-weight-bold mb-2" style="color: #1e293b;">Live Emergency Blood Requirements</h2>
                <p class="text-muted mx-auto" style="max-width: 600px; font-size: 1rem; line-height: 1.6;">
                    Every second counts during a medical emergency. Review active requests verified below, look closely at the patient profiles, and contact them immediately to save a life.
                </p>
            </div>

            <div class="row">
                <?php 
                // Connecting precisely with your table structure properties
                $sql = "SELECT * FROM tblbloodrequirer ORDER BY ID DESC";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                
                if($query->rowCount() > 0) {
                    foreach($results as $result) { 
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="request-card p-4">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div>
                                <span class="meta-label">Patient Contact Name</span>
                                <h4 class="font-weight-bold m-0" style="color: #0f172a;"><?php echo htmlentities($result->name); ?></h4>
                            </div>
                        </div>

                        <div class="row border-top border-bottom py-2 my-3" style="background-color: #f8fafc;">
                            <div class="col-6">
                                <span class="meta-label"><i class="fas fa-users mr-1"></i> Required For</span>
                                <div class="meta-val mt-1"><?php echo htmlentities($result->BloodRequirefor); ?></div>
                            </div>
                            <div class="col-6 text-right">
                                <span class="meta-label"><i class="far fa-calendar-alt mr-1"></i> Posted On</span>
                                <div class="meta-val mt-1" style="font-size:0.85rem; font-weight:normal;">
                                    <?php echo date('d M, Y', strtotime($result->ApplyDate)); ?>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <span class="meta-label"><i class="far fa-comment-alt mr-1"></i> Critical Situation Notes</span>
                            <p class="text-muted font-italic mt-1 m-0" style="font-size: 0.9rem; min-height: 45px; line-height: 1.5;">
                                "<?php echo htmlentities($result->Message); ?>"
                            </p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="tel:<?php echo $result->ContactNumber; ?>" class="btn btn-call flex-grow-1 text-center mr-2">
                                <i class="fas fa-phone-volume mr-2"></i> Call Requester
                            </a>
                            <a href="mailto:<?php echo $result->EmailId; ?>?subject=Urgent Blood Requirement Help" class="btn btn-email text-center">
                                <i class="far fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php 
                    } 
                } else { 
                ?>
                <div class="col-12 text-center">
                    <div class="alert alert-info py-4">No active blood requests listed right now.</div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php');?>
</body>
</html>