LOCAL_PATH := $(call my-dir)

include $(CLEAR_VARS)

LOCAL_MODULE    := dfu-programmer

LOCAL_MODULE_TAGS := optional

LOCAL_CFLAGS += \
	-D_ANDROID \
	-DHAVE_LIBUSB_1_0 \
	-DPACKAGE='"dfu-programmer"' \
	-DPACKAGE_STRING='"dfu-programmer"' \

LOCAL_C_INCLUDES := \
	external/libusb/libusb

LOCAL_SRC_FILES  := \
	main.c arguments.c atmel.c \
        commands.c dfu.c \
	intel_hex.c util.c

# LOCAL_LDFLAGS += -L$(SYSROOT)/usr/lib -llog

LOCAL_STATIC_LIBRARIES := libusb

include $(BUILD_EXECUTABLE)


