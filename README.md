# Hi!! Perkenalkan
- NAMA : Zainal Fattah
- NIM : 32602300013
- Prodi : Teknik Informatika
- Fakultas Teknologi Industri
### Repository ini dibuat guna untuk memenuhi tugas pretest Matakuliah Praktikum Web Programming A

# CodeIgniter 4 Project Documentation

## Overview
This is a CodeIgniter 4 based web application. CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.

## Requirements

- PHP >= 8.1
- Required PHP Extensions:
  - intl
  - mbstring
  - json
  - mysqlnd (for MySQL database)
  - libcurl (for HTTP\CURLRequest library)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/ZainalFattah/32602300013_Zainal-Fattah_PRETEST.git
cd [project-directory]
```

2. Install dependencies using Composer:
```bash
composer install
```

3. Environment Setup:
   - Copy `env` to `.env`
   - Configure your environment variables in `.env`:
     - Set your `baseURL`
     - Configure database settings
     - Set other environment-specific variables

4. Web Server Configuration:
   - Point your web server to the `public` directory
   - Ensure the `writable` directory is writable by the web server
   - Recommended: Set up a virtual host for better security

## Project Structure

```
project/
├── app/                # Application code
├── public/            # Public files and index.php
├── system/            # CodeIgniter core files
├── tests/             # Test files
├── writable/          # Writable directory for logs, cache, etc.
├── .env               # Environment configuration
└── composer.json      # Project dependencies
```

## Development

1. Start the development server:
```bash
php spark serve
```

2. Access your application at `http://localhost:8080`

## Testing

Run tests using PHPUnit:
```bash
composer test
```

## Security

- Keep your `.env` file secure and never commit it to version control
- Ensure proper file permissions on the `writable` directory
- Follow CodeIgniter's security best practices

## Additional Resources

- [CodeIgniter 4 Documentation](https://codeigniter.com/user_guide/)
- [CodeIgniter 4 Forum](https://forum.codeigniter.com/)
- [CodeIgniter 4 GitHub Repository](https://github.com/codeigniter4/CodeIgniter4)

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Support

For support, please:
1. Check the [CodeIgniter 4 Documentation](https://codeigniter.com/user_guide/)
2. Visit the [CodeIgniter Forums](https://forum.codeigniter.com/)
3. Join the [CodeIgniter Slack Channel](https://codeigniterchat.slack.com)
