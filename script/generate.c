#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <unistd.h>
int main(int argc, char *argv[]) {
	if (strcmp(argv[1], "dir") == 0) {
		if (!file_exists(argv[2])) execl("/bin/mkdir", "/bin/mkdir", argv[2], (char *) 0);
	} else if (strcmp(argv[1], "sax") == 0) {
		printf("%s -jar %s %s %s %s", argv[2], argv[3], argv[4], argv[5], argv[6]);
		execl(argv[2], argv[2], "-jar", argv[3], argv[4], argv[5], argv[6], (char *) 0);
	} else if (strcmp(argv[1], "copy") == 0) {
		if (!file_exists(argv[2])) execl("/bin/cp", "/bin/cp", argv[3], argv[2], (char *) 0);
	}
}
int file_exists(const char * filename) {
	FILE * file = fopen(filename, "r");
	if (file != NULL) {
		fclose(file);
    return 1;
  }
  return 0;
}