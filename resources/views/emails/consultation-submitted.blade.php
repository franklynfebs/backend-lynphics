<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Request Received</title>
</head>
<body style="margin:0;padding:0;background:#f4f4f5;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f5;padding:40px 20px;">
    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:12px;overflow:hidden;">

                <tr>
                    <td style="background:#06b6d4;padding:32px;text-align:center;">
                        <h1 style="margin:0;color:#ffffff;font-size:28px;">
                            LYNPHICS
                        </h1>
                    </td>
                </tr>

                <tr>
                    <td style="padding:40px;">

                        <h2 style="margin-top:0;color:#111827;">
                            Hello {{ $consultation->full_name }},
                        </h2>

                        <p style="font-size:16px;line-height:1.8;color:#4b5563;">
                            Thank you for requesting a consultation with LYNPHICS.
                        </p>

                        <p style="font-size:16px;line-height:1.8;color:#4b5563;">
                            We've successfully received your consultation request and our team will review the information you submitted.
                        </p>

                        <p style="font-size:16px;line-height:1.8;color:#4b5563;">
                            We aim to contact you within <strong>24 hours</strong> using your preferred contact method.
                        </p>

                        <hr style="margin:40px 0;border:none;border-top:1px solid #e5e7eb;">

                        <h3 style="color:#111827;">
                            Your Submission
                        </h3>

                        <table width="100%" cellpadding="8">

                            <tr>
                                <td><strong>Business</strong></td>
                                <td>{{ $consultation->business_name }}</td>
                            </tr>

                            <tr>
                                <td><strong>Email</strong></td>
                                <td>{{ $consultation->email }}</td>
                            </tr>

                            <tr>
                                <td><strong>Phone</strong></td>
                                <td>{{ $consultation->phone }}</td>
                            </tr>

                            <tr>
                                <td><strong>Industry</strong></td>
                                <td>{{ $consultation->industry }}</td>
                            </tr>

                            <tr>
                                <td><strong>Timeline</strong></td>
                                <td>{{ $consultation->timeline }}</td>
                            </tr>

                        </table>

                        <p style="margin-top:40px;font-size:16px;line-height:1.8;color:#4b5563;">
                            Thank you again for choosing LYNPHICS. We look forward to helping modernize and grow your business.
                        </p>

                        <p style="margin-top:40px;color:#111827;">
                            Kind regards,<br>
                            <strong>LYNPHICS</strong>
                        </p>

                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>