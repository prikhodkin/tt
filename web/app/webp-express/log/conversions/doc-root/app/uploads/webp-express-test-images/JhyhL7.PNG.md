WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2020-11-18 23:00:35

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/webp-express-test-images/JhyhL7.PNG
- destination: [doc-root]/app/webp-express/webp-images/uploads/webp-express-test-images/JhyhL7.PNG.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/webp-express-test-images/JhyhL7.PNG
- destination: [doc-root]/app/webp-express/webp-images/uploads/webp-express-test-images/JhyhL7.PNG.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *1.1.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: /usr/local/bin/cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15 -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- cwebp: (version: 1.1.0)
- /usr/local/bin/cwebp: (version: 1.1.0)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/uploads/webp-express-test-images/JhyhL7.PNG' -o '[doc-root]/app/webp-express/webp-images/uploads/webp-express-test-images/JhyhL7.PNG.webp.lossy.webp' 2>&1 2>&1

*Output:* 
nice: cwebp: No such file or directory

Exec failed (return code: 127)
Creating command line options for version: 1.1.0
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/uploads/webp-express-test-images/JhyhL7.PNG' -o '[doc-root]/app/webp-express/webp-images/uploads/webp-express-test-images/JhyhL7.PNG.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/uploads/webp-express-test-images/JhyhL7.PNG.webp.lossy.webp'
File:      [doc-root]/app/uploads/webp-express-test-images/JhyhL7.PNG
Dimension: 300 x 300 (with alpha)
Output:    2130 bytes Y-U-V-All-PSNR 53.59 49.98 50.82   52.24 dB
           (0.19 bpp)
block count:  intra4:         29  (8.03%)
              intra16:       332  (91.97%)
              skipped:       285  (78.95%)
bytes used:  header:            136  (6.4%)
             mode-partition:    331  (15.5%)
             transparency:      194 (99.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     416 |       0 |       8 |       0 |     424  (19.9%)
 intra16-coeffs:  |     114 |       0 |       0 |       2 |     116  (5.4%)
  chroma coeffs:  |     813 |       9 |      12 |      39 |     873  (41.0%)
    macroblocks:  |      37%|       1%|       0%|      61%|     361
      quantizer:  |      20 |      18 |      14 |       9 |
   filter level:  |       7 |       4 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1343 |       9 |      20 |      41 |    1413  (66.3%)
Lossless-alpha compressed size: 193 bytes
  * Header size: 40 bytes, image data size: 153
  * Lossless features used: PALETTE
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   5

Success
Reduction: 32% (went from 3118 bytes to 2130 bytes)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *1.1.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: /usr/local/bin/cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15 -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- cwebp: (version: 1.1.0)
- /usr/local/bin/cwebp: (version: 1.1.0)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/uploads/webp-express-test-images/JhyhL7.PNG' -o '[doc-root]/app/webp-express/webp-images/uploads/webp-express-test-images/JhyhL7.PNG.webp.lossless.webp' 2>&1 2>&1

*Output:* 
nice: cwebp: No such file or directory

Exec failed (return code: 127)
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/uploads/webp-express-test-images/JhyhL7.PNG' -o '[doc-root]/app/webp-express/webp-images/uploads/webp-express-test-images/JhyhL7.PNG.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/uploads/webp-express-test-images/JhyhL7.PNG.webp.lossless.webp'
File:      [doc-root]/app/uploads/webp-express-test-images/JhyhL7.PNG
Dimension: 300 x 300
Output:    1046 bytes (0.09 bpp)
Lossless-ARGB compressed size: 1046 bytes
  * Header size: 315 bytes, image data size: 706
  * Lossless features used: PALETTE
  * Precision Bits: histogram=3 transform=3 cache=1
  * Palette size:   153

Success
Reduction: 66% (went from 3118 bytes to 1046 bytes)

Picking lossless
cwebp succeeded :)

Converted image in 353 ms, reducing file size with 66% (went from 3118 bytes to 1046 bytes)
