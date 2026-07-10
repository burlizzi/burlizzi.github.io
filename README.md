# CAN-to-CORBA Middleware

This repository contains the middleware implementation for interfacing a **CAN (Controller Area Network) Bus** with a **CORBA-based** distributed system. The software reads raw CAN frames, processes them, and publishes the data to specific CORBA objects.

## Architecture Overview
The system acts as a bridge between low-level vehicle field signals and high-level distributed applications.
- **CAN Bus:** Raw data source.
- **Middleware:** Parses CAN frames, applies scaling, and updates CORBA servants.
- **CORBA Objects:** Exposes vehicle data via IDL-defined interfaces.

## Prerequisites
- **ORB Implementation:** (e.g., TAO, JacORB, or OmniORB)
- **CAN Driver/Library:** (e.g., SocketCAN for Linux)
- **Build System:** CMake or Make

## IDL Definitions
The interfaces are defined in the `vehicle_system.idl` file:

```idl
module VehicleSystem {
    interface EngineMonitor {
        attribute float engineRPM;
        attribute float oilTemperature;
    };
    // ... further interfaces (ChassisMonitor, VehicleStatus)
};
